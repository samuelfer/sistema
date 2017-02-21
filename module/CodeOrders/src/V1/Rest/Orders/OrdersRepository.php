<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 30/01/17
 * Time: 22:37
 */

namespace CodeOrders\V1\Rest\Orders;


use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Hydrator\ClassMethods;
//use Zend\Hydrator\ObjectProperty;
use Zend\Paginator\Adapter\ArrayAdapter;

class OrdersRepository
{
    /**
     * @var AbstractTableGateway
     */
    private $tableGateway;
    /**
     * @var AbstractTableGateway
     */
    private $orderItemTableGateway;
    /**
     * @var AbstractTableGateway
     */
    private $clientsTableGateway;

    public function __construct(AbstractTableGateway $tableGateway, AbstractTableGateway $orderItemTableGateway, AbstractTableGateway $clientsTableGateway)
    {
        $this->tableGateway = $tableGateway;
        $this->orderItemTableGateway = $orderItemTableGateway;
        $this->clientsTableGateway = $clientsTableGateway;
    }
    
    public function findAll()
    {
        $hydrator= new ClassMethods();
        $hydrator->addStrategy('items', new OrderItemHydratorStrategy(new ClassMethods()));
        $orders = $this->tableGateway->select();
        $res = [];
        //Entrando nas ordens
        foreach ($orders as $order){
            $items = $this->orderItemTableGateway->select(['order_id' => $order->getId()]);
            //Pegando os itens
            foreach ($items as $item){
                $order->addItems($item);
            }

            //Transformando a classe OrdersEntity em um array
            $data = $hydrator->extract($order);
            $res[] = $data;
        }
        //PEgando um adaptador de array
        $arrayAdapter = new ArrayAdapter($res);
        //Retornando uma colecao de ordens
        $ordersCollection = new OrdersCollection($arrayAdapter);
        return $ordersCollection;
    }

    public function find($id)
    {
        $resultSet = $this->tableGateway->select(['id' => (int)$id]);

        if ($resultSet->count() == 1){
            $hydrator = new ClassMethods();
            $hydrator->addStrategy('items', new OrderItemHydratorStrategy(new ClassMethods()));
            $order = $resultSet->current();

            $client = $this->clientsTableGateway
                ->select(['id' =>$order->getClientId()])
                ->current();

            $sql = $this->orderItemTableGateway->getSql();
            $select = $sql->select();
            $select->join(
                'products',
                'order_items.product_id = products.id',
                ['product_name' =>'name']
            )
                ->where(['order_id' => $order->getId()]);
            //Imprimindo o select d zend
            //$sqlPrint = $select->__toString();
            //echo $sqlPrint;

            $items = $this->orderItemTableGateway->selectWith($select);

            $order->setClient($client);

            foreach ($items as $item){
                $order->addItem($item);
            }

            $data = $hydrator->extract($order);

            return $data;
        }
        return false;
    }

    //Metodo responsavel por inserir a ordem na tabela
    public function insert(array $data)
    {
        print_r($data);die;
        $this->tableGateway->insert($data);
        $id = $this->tableGateway->getLastInsertValue();
        return $id;
    }

    public function insertItem(array $data)
    {
        $this->orderItemTableGateway->insert($data);
        return $this->orderItemTableGateway->getLastInsertValue();
    }
    
    public function update(array $data, $id)
    {
        $this->tableGateway->update($data, ['id' => $id]);
        return $id;
    }

    public function getTableGateway()
    {
        return $this->tableGateway;
    }
}