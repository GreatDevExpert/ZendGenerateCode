<?php

namespace CodeGen\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Doctrine\ORM\EntityManager;

class IndexController extends AbstractActionController
{
    /**
     * @var DoctrineORMEntityManager
     */
    protected $em;
    
    protected function getEntityManager()
    {
        if (null === $this->em) {
            $this->em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        }
        return $this->em;
    }

    public function indexAction()
    {
        //return new ViewModel(array("albums"=> $this->getEntityManager()->getRepository("Album\Entity\Album")->findAll()));
    }
}
?>
