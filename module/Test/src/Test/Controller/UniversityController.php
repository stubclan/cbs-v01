<?php

namespace Test\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UniversityController extends AbstractActionController
{
    public function indexAction(){
        $result = new ViewModel(array(
            'some_parameter' => 'some value',
            'success'=>true,
        ));

        return $result;
    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
}

