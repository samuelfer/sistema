<?php
namespace SindicoAmigo\V1\Rest\Achadosperdidos;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;

class AchadosperdidosResource extends AbstractResourceListener
{
    private $repository;
    
    public function __construct(AchadosperdidosRepository $repository)
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
        try {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->beginTransaction();
            $this->tableGateway->insert($data);
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->commit();
            $idAgenda = $this->tableGateway->getLastInsertValue();
            return $idAgenda;
        } catch (\Exception $e) {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->rollback();
            return 'error';
        }
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for individual resources');
    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList($data)
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
     * Fetch a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    //Retorna um registro pelo id
    public function fetch($id_achados_perdidos)
    {
        return $this->repository->find($id_achados_perdidos);
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    //Retorna uma colecao de registros
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
        return new ApiProblem(405, 'The PATCH method has not been defined for individual resources');
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
        return new ApiProblem(405, 'The PUT method has not been defined for collections');
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
