<?php
/**
 * Created by PhpStorm.
 * User: albov
 * Date: 01/02/2016
 * Time: 20:55
 */

namespace ApiRest\Controller;


use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class SampleRestFull extends AbstractRestfulController
{

    public function getList()
    {
        return array('1'=>'tesdasdadadd
        dadaddas
        dasdasd
        dasd

        dasddasd');
        //return new JsonModel($data);
    }

    public function get($id)
    {
        return new JsonModel(array('id' => $id));
    }

    public function create($data)
    {
        return array('data'=> $data);
    }

    public function update($id, $data)
    {
        # code...
    }

    public function delete($id)
    {
        # code...
    }

}