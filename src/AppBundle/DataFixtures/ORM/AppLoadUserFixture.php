<?php 

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

/*
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
*/

class AppLoadUserFixture extends Fixture{
    public static function getReferenceKey($i){
        /*
        Este método estático genera referencias para los objetos que cree la Fixture en función del índice del bucle.
        */
        return sprintf('user_%s',$i);
    }
    /**
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager){
        # create 5 users!
        #cifrar la contrasenia                
        $opciones = ['cost' => 4];   
        $psw = password_hash('123456', PASSWORD_BCRYPT, $opciones);
        for ($i = 0; $i < 5; $i++) {
            $user = new Users();
            $user->setName('user name_'.$i);
            $user->setSurname('user surname_'.$i);
            $user->setEmail('user_'.$i.'@gmail.com');
            $user->setNick('user nick_'.$i);
            $user->setActive('NO');
            $user->setAdministrator('NO');
            $user->setPassword($psw);
            $user->setCreate_at(new \Datetime('now'));            
            $manager->persist($user);

            $this->addReference(self::getReferenceKey($i),$user);
            /*
            addReference le dice al bundle que añada una referencia del objeto de Doctrine $user para posteriormente poderlo buscar. Este método recibe dos argumentos, la clave para guardar la referencia al objeto y el objeto en sí mismo
            */
        }
        $manager->flush();
    }
}

