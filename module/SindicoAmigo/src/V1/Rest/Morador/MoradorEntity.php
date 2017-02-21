<?php
namespace SindicoAmigo\V1\Rest\Morador;

class MoradorEntity
{
    protected $id_morador;
    protected $id_numero_imovel;
    protected $id_bloco;
    protected $necessidade_especial;
    protected $cadeirante;
    protected $dt_entrada;
    protected $dt_saida;
    protected $st_ativo;
    protected $tp_morador;
    protected $id_pessoa;
    
    function getIdMorador() {
        return $this->id_morador;
    }

    function getIdNumeroImovel() {
        return $this->id_numero_imovel;
    }

    function getIdBloco() {
        return $this->id_bloco;
    }

    function getNecessidadeEspecial() {
        return $this->necessidade_especial;
    }

    function getCadeirante() {
        return $this->cadeirante;
    }

    function getDtEntrada() {
        return $this->dt_entrada;
    }

    function getDtSaida() {
        return $this->dt_saida;
    }

    function getStAtivo() {
        return $this->st_ativo;
    }

    function getTpMorador() {
        return $this->tp_morador;
    }

    function getIdPessoa() {
        return $this->id_pessoa;
    }

    function setIdMorador($id_morador) {
        $this->id_morador = $id_morador;
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

    function setNecessidadeEspecial($necessidade_especial) {
        $this->necessidade_especial = $necessidade_especial;
        return $this;
    }

    function setCadeirante($cadeirante) {
        $this->cadeirante = $cadeirante;
        return $this;
    }

    function setDtEntrada($dt_entrada) {
        $this->dt_entrada = $dt_entrada;
        return $this;
    }

    function setDtSaida($dt_saida) {
        $this->dt_saida = $dt_saida;
        return $this;
    }

    function setStAtivo($st_ativo) {
        $this->st_ativo = $st_ativo;
        return $this;
    }

    function setTpMorador($tp_morador) {
        $this->tp_morador = $tp_morador;
        return $this;
    }

    function setIdPessoa($id_pessoa) {
        $this->id_pessoa = $id_pessoa;
        return $this;
    }


}
