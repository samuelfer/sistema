<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 21:48
 */

namespace CodeOrders\V1\Rest\Orders;


use CodeOrders\V1\Rest\Products\ProductsRepository;
use CodeOrders\V1\Rest\Users\UsersRepository;
use Zend\Hydrator\ObjectProperty;

class OrdersService
{

    /**
     * @var OrdersRepository
     */
    private $repository;
    /**
     * @var UsersRepository
     */
    private $usersRepository;
    /**
     * @var ProductsRepository
     */
    private $productRepository;

    public function __construct(OrdersRepository $repository, UsersRepository $usersRepository, ProductsRepository $productRepository)
    {
        
        $this->repository = $repository;
        $this->usersRepository = $usersRepository;
        $this->productRepository = $productRepository;
    }

    //Metodo responsavel por fazer a insercao na tabela
    public function insert($data)
    {
        $hydrator = new ObjectProperty();
        //Transformando o object em array
        $data->user_id = $this->usersRepository->getAuthenticated()->getId();
        //print_r($data);die;
        $data->created_at = (new \DateTime())->format('Y-m-d');
        $data->total = 0;
        $items = $data->item;
        unset($data->item);

        $orderData = $hydrator->extract($data);
        $tableGateway = $this->repository->getTableGateway();

        try{
        $tableGateway->getAdapter()->getDriver()->getConnection()->beginTransaction();
        $orderId = $this->repository->insert($orderData);

         $total = 0;
        foreach ($items as $key=>$item){
            $product = $this->productRepository->find($item['product_id']);
            $item['order_id'] = $orderId;
            $item['price'] = $product['price'];
            $item['total'] = $items[$key]['total'] = $item['quantity'] * $item['price'];
            $total += $item['total'];

            $this->repository->insertItem($item);
        }

        $this->repository->update(['total' => $total], $orderId);
        $tableGateway->getAdapter()->getDriver()->getConnection()->commit();

        return ['order_id' => $orderId];
        }catch(\Exception $e){
            $tableGateway->getAdapter()->getDriver()->getConnection()->rollback();
            return 'error';
        }
    }
}