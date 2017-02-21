<?php
namespace SindicoAmigo\V1\Rest\Bloqueioperiodo;

class BloqueioperiodoEntity
{
    protected $id_bloqueio_periodo;
    protected $id_bloco;
    protected $id_numero_imovel;
    protected $dt_inicio;
    protected $dt_fim;
    protected $de_observacao;
    
    function getIdBloqueioPeriodo() {
        return $this->id_bloqueio_periodo;
    }

    function getIdBloco() {
        return $this->id_bloco;
    }

    function getIdNumeroImovel() {
        return $this->id_numero_imovel;
    }

    function getDtInicio() {
        return $this->dt_inicio;
    }

    function getDtFim() {
        return $this->dt_fim;
    }

    function getDeObservacao() {
        return $this->de_observacao;
    }

    function setIdBloqueioPeriodo($id_bloqueio_periodo) {
        $this->id_bloqueio_periodo = $id_bloqueio_periodo;
        return $this;
    }

    function setIdBloco($id_bloco) {
        $this->id_bloco = $id_bloco;
        return $this;
    }

    function setIdNumeroImovel($id_numero_imovel) {
        $this->id_numero_imovel = $id_numero_imovel;
        return $this;
    }

    function setDtInicio($dt_inicio) {
        $this->dt_inicio = $dt_inicio;
        return $this;
    }

    function setDtFim($dt_fim) {
        $this->dt_fim = $dt_fim;
        return $this;
    }

    function setDeObservacao($de_observacao) {
        $this->de_observacao = $de_observacao;
        return $this;
    }


}
