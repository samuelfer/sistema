<?php
namespace SindicoAmigo\V1\Rest\Historico;

class HistoricoEntity
{
    protected $id_historico;
    protected $id_pessoa;
    protected $id_tipopessoa;
    protected $id_numero_imovel;
    protected $id_bloco;
    protected $dt_entrada;
    protected $dt_inativacao;
    
    function getIdHistorico() {
        return $this->id_historico;
    }

    function getIdPessoa() {
        return $this->id_pessoa;
    }

    function getIdTipopessoa() {
        return $this->id_tipopessoa;
    }

    function getIdNumeroImovel() {
        return $this->id_numero_imovel;
    }

    function getIdBloco() {
        return $this->id_bloco;
    }

    function getDtEntrada() {
        return $this->dt_entrada;
    }

    function getDtInativacao() {
        return $this->dt_inativacao;
    }

    function setIdHistorico($id_historico) {
        $this->id_historico = $id_historico;
        return $this;
    }

    function setIdPessoa($id_pessoa) {
        $this->id_pessoa = $id_pessoa;
        return $this;
    }

    function setIdTipopessoa($id_tipopessoa) {
        $this->id_tipopessoa = $id_tipopessoa;
        return $this;
    }

    function setIdNumeroImovel($id_numero_imovel) {
        $this->id_numero_imovel = $id_numero_imovel;
        return $this;
    }

    function setIdBloco($id_bloco) {
        $this->id_bloco = $id_bloco;
        return $this;
    }

    function setDtEntrada($dt_entrada) {
        $this->dt_entrada = $dt_entrada;
        return $this;
    }

    function setDtInativacao($dt_inativacao) {
        $this->dt_inativacao = $dt_inativacao;
        return $this;
    }


}
