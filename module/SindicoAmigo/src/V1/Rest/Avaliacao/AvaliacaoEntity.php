<?php
namespace SindicoAmigo\V1\Rest\Avaliacao;

class AvaliacaoEntity
{
    protected $id_avaliacao;
    protected $nu_avaliacao;
    protected $id_prestador;
    protected $dt_avaliacao;
    protected $observacao;
    
    function getIdAvaliacao() {
        return $this->id_avaliacao;
    }

    function getNuAvaliacao() {
        return $this->nu_avaliacao;
    }

    function getIdPrestador() {
        return $this->id_prestador;
    }

    function getDtAvaliacao() {
        return $this->dt_avaliacao;
    }

    function getObservacao() {
        return $this->observacao;
    }

    function setIdAvaliacao($id_avaliacao) {
        $this->id_avaliacao = $id_avaliacao;
        return $this;
    }

    function setNuAvaliacao($nu_avaliacao) {
        $this->nu_avaliacao = $nu_avaliacao;
        return $this;
    }

    function setIdPrestador($id_prestador) {
        $this->id_prestador = $id_prestador;
        return $this;
    }

    function setDtAvaliacao($dt_avaliacao) {
        $this->dt_avaliacao = $dt_avaliacao;
        return $this;
    }

    function setObservacao($observacao) {
        $this->observacao = $observacao;
        return $this;
    }


}
