<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 21/01/17
 * Time: 10:56
 */

namespace SindicoAmigo\V1\Rest\Configuracao;

use Zend\Db\TableGateway\TableGatewayInterface;


class ConfiguracaoRepository
{

    private $tableGateway;

    /**
     * @var TableGatewayInterface
     */
    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function findAll()
    {
        return $this->tableGateway->select();
    }
}