<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Posts;

use AppBundle\table\Components\ApiTable;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/*
 * KilikTableBundle
 */
use Kilik\TableBundle\Components\Column;
use Kilik\TableBundle\Components\Filter;
use Kilik\TableBundle\Components\Table;

class DefaultController extends Controller{

    /*public function indexAction(Request $request){
        #replace this example code with whatever you need
            return $this->render('default/index.html.twig', [
          'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);        
    } */

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request){        

        return $this->render(            
            '@AppBundle/Resources/views/table_post/table_post_filter.html.twig',[
                'table'=> $this->get('kilik_table')->createFormView(
                    $this->tablePost()
                )
            ]
        );
    }
    /**
     * @Route("/post_ajax", name="post_ajax")
     */
    public function ajaxPostAction(Request $request){

        return $this->get('kilik_table')->handleRequest(
            $this->tablePost(),
            $request
        );
    }
    /*
    *Funcion que recupera todos los POST (Blog) de un usuario
    */
    public function tablePost(){   

        $queryBuilder = $this->getDoctrine()->getManager()->getRepository(Posts::class)->createQueryBuilder('p')->select('p,u')
            ->join('p.author','u')
            ->where('u.active = :active')
            ->setParameter('active','SI');                

        $table = (new Table())
            ->setRowsPerPage(10)
            ->setId('table_posts')
            ->setPath($this->generateUrl('post_ajax'))
            ->setQueryBuilder($queryBuilder, 'p')                        
            ->setTemplate('@AppBundle/Resources/views/table_post/table_post_publico.html.twig')                        

            ->addColumn(
                (new Column())->setLabel('Id')
                    ->setSort(['p.id' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('p.id')
                            ->setName('p_id')
                    )
            )
            ->addColumn(
                (new Column())->setLabel('Titulo')
                    ->setSort(['p.title' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('p.title')
                            ->setName('p_title')
                    )
            )
            ->addColumn(
                (new Column())->setLabel('Creado')
                    ->setSort(['p.create_at' => 'asc'])
                    ->setDisplayFormat(Column::FORMAT_DATE)
                    ->setDisplayFormatParams('d/m/Y')
                    ->setFilter(
                        (new Filter())
                            ->setField('p.create_at')
                            ->setName('p_create_at')
                    )
            );           
        return $table;   
    }

}
