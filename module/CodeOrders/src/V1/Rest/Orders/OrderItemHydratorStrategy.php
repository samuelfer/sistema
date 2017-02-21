<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 21:29
 */

namespace CodeOrders\V1\Rest\Orders;


use Zend\Hydrator\ClassMethods;
use Zend\Hydrator\Strategy\StrategyInterface;

class OrderItemHydratorStrategy implements StrategyInterface
{

    /**
     * @var ClassMethods
     */
    private $hydrator;

    public function __construct(ClassMethods $hydrator)
    {
        $this->hydrator = $hydrator;
    }

    /**
     * Converts the given value so that it can be extracted by the hydrator.
     *
     * @param mixed $value The original value.
     * @param object $object (optional) The original object for context.
     * @return mixed Returns the value that should be extracted.
     */
    public function extract($items)
    {
        //Criando um array vazio para receber os itens na ordem
        $data = [];

        foreach ($items as $item){
            $data[] = $this->hydrator->extract($item);
        }

        return $data;
    }

    /**
     * Converts the given value so that it can be hydrated by the hydrator.
     *
     * @param mixed $value The original value.
     * @param array $data (optional) The original data for context.
     * @return mixed Returns the value that should be hydrated.
     */
    public function hydrate($value)
    {
        throw new \RuntimeException('Hydrator não suporta!');
    }
}