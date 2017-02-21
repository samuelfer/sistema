<?php
namespace SindicoAmigo\V1\Rest\Contacorrente;

class ContacorrenteEntity
{
    protected $nu_conta;
    protected $nu_agencia_banco;
    protected $id_banco;
    protected $id_condominio;
    protected $id_tipo_conta;
    protected $nu_valor;
    
    function getNuConta() {
        return $this->nu_conta;
    }

    function getNuAgenciaBanco() {
        return $this->nu_agencia_banco;
    }

    function getId_banco() {
        return $this->id_banco;
    }

    function getIdCondominio() {
        return $this->id_condominio;
    }

    function getIdTipoConta() {
        return $this->id_tipo_conta;
    }

    function getNuValor() {
        return $this->nu_valor;
    }

    function setNuConta($nu_conta) {
        $this->nu_conta = $nu_conta;
        return $this;
    }

    function setNuAgenciaBanco($nu_agencia_banco) {
        $this->nu_agencia_banco = $nu_agencia_banco;
        return $this;
    }

    function setIdBanco($id_banco) {
        $this->id_banco = $id_banco;
        return $this;
    }

    function setIdCondominio($id_condominio) {
        $this->id_condominio = $id_condominio;
        return $this;
    }

    function setIdTipoConta($id_tipo_conta) {
        $this->id_tipo_conta = $id_tipo_conta;
        return $this;
    }

    function setNuValor($nu_valor) {
        $this->nu_valor = $nu_valor;
        return $this;
    }


}
