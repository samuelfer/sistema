<?php
namespace SindicoAmigo\V1\Rest\Areacomum;

use Zend\Hydrator\ObjectProperty;
use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;

class AreacomumResource extends AbstractResourceListener
{

    /**
     * @var AreacomumRepository
     */
    private $repository;

    public function __construct(AreacomumRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */


    public function create($data)
    {
        $hydrator = new ObjectProperty();
        $dataArea = $hydrator->extract($data);
        $result = $this->repository->create($dataArea);
        //print_r($dataArea);die;
        //Se der algum erro retorna a mensagem
        if($result == "error"){
            return new ApiProblem(500, 'Error ao tentar cadastrar!');
        }
        return $result;
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        //$userRole = $this->repository->findByUsername($this->getIdentity()->getRoleId());
        //if($userRole!="admin")
        //{
           // return new ApiProblem(403, 'You are not an admin. Your are an :'.$userRole);
        //}
        //print_r($id);die;
        return $this ->repository->delete($id);
    }

    /**
     * Delete a collection, or members of a collection
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList($data)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id_cadastro_reserva_area_comum
     * @return ApiProblem|mixed
     */
    public function fetch($id_cadastro_reserva_area_comum)
    {
        return $this->repository->find($id_cadastro_reserva_area_comum);
        
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = [])
    {
        return $this->repository->findAll();
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patch($id, $data)
    {
        $result =  $this->repository->patch($id, $data);
        
         if($result=="error"){
            return new ApiProblem(500, 'Error');
        }
        return $result;
    }

    /**
     * Patch (partial in-place update) a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patchList($data)
    {
        return new ApiProblem(405, 'The PATCH method has not been defined for collections');
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function replaceList($data)
    {
        
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function update($id, $data)
    {
       $result = $this->repository->update($id, $data);
        
        if($result=="error"){
            return new ApiProblem(500, 'Error');
        }
        return $result;
    }
}
