<?php 

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Posts;
use AppBundle\DataFixtures\ORM\AppLoadUserFixture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
/*
 Se importa e implementa la interfaz DependentFixtureInterface.
*/
class AppLoadPostFixture extends Fixture implements DependentFixtureInterface {
    /**
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager){
        # create 10 users!
        for ($i = 0; $i < 10; $i++) {
            /*
            Se emplea el método getReference de la clase abstracta Fixture para recuperar una referencia a un objeto en Doctrine previamente almacenada. Para ello se necesita la clave del objeto, la cual se genera con el método estático getReferenceKey de la clase
            */
            $user = $this->getReference(AppLoadUserFixture::getReferenceKey($i % 5));
            $post = new Posts();
            $post->setTitle('title title_'.$i);
            $post->setBody('body body_'.$i);
            $post->setAuthor($user);
            
            $post->setCreate_at(new \Datetime('now'));            
            $manager->persist($post);
        }
        $manager->flush();
    }

    public function getDependencies(){
        /*
        Se carga las las dependencias de esta Fixture, de modo que cuando sea cargada por medio del comando doctrine:fixtures:load también se ejecuten las Fixtures indicadas como dependencias.
        */
        return [AppLoadUserFixture::class];
    }
}

