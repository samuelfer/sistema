<?php
namespace SindicoAmigo\V1\Rest\Movimento;

class MovimentoEntity
{
    protected $id_movimento;
    protected $nu_conta;
    protected $nu_agencia_banco;
    protected $id_fornecedor;
    protected $id_tipo_documento;
    protected $id_tipo_movimento;
    protected $dt_data_movimento;
    protected $nu_numero_documento;
    protected $nu_valor_movimento;
    
    function getIdMovimento() {
        return $this->id_movimento;
    }

    function getNuConta() {
        return $this->nu_conta;
    }

    function getNuAgenciaBanco() {
        return $this->nu_agencia_banco;
    }

    function getIdFornecedor() {
        return $this->id_fornecedor;
    }

    function getIdTipoDocumento() {
        return $this->id_tipo_documento;
    }

    function getIdTipoMovimento() {
        return $this->id_tipo_movimento;
    }

    function getDtDataMovimento() {
        return $this->dt_data_movimento;
    }

    function getNuNumeroDocumento() {
        return $this->nu_numero_documento;
    }

    function getNuValorMovimento() {
        return $this->nu_valor_movimento;
    }

    function setIdMovimento($id_movimento) {
        $this->id_movimento = $id_movimento;
        return $this;
    }

    function setNuConta($nu_conta) {
        $this->nu_conta = $nu_conta;
        return $this;
    }

    function setNuAgenciaBanco($nu_agencia_banco) {
        $this->nu_agencia_banco = $nu_agencia_banco;
        return $this;
    }

    function setIdFornecedor($id_fornecedor) {
        $this->id_fornecedor = $id_fornecedor;
        return $this;
    }

    function setIdTipoDocumento($id_tipo_documento) {
        $this->id_tipo_documento = $id_tipo_documento;
        return $this;
    }

    function setIdTipoMovimento($id_tipo_movimento) {
        $this->id_tipo_movimento = $id_tipo_movimento;
        return $this;
    }

    function setDtDataMovimento($dt_data_movimento) {
        $this->dt_data_movimento = $dt_data_movimento;
        return $this;
    }

    function setNuNumeroDocumento($nu_numero_documento) {
        $this->nu_numero_documento = $nu_numero_documento;
        return $this;
    }

    function setNuValorMovimento($nu_valor_movimento) {
        $this->nu_valor_movimento = $nu_valor_movimento;
        return $this;
    }


}
