<?php 
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository; 
/**
 * 
 */
class UserRepository extends EntityRepository{
	
	public function getQueryTable(){

		return $this->getEntityManager()->createQueryBuilder('u')->select('u');
		//return $this->createQueryBuilder('u')->select('u');

	}

	/* public function getQueryTable()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT u FROM AppBundle:Users u ORDER BY p.nombre ASC'
            )
            ->getResult();
    }*/
}








 ?>