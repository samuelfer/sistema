<?php
namespace SindicoAmigo\V1\Rest\Leituragas;

class LeituragasEntity
{
    protected $id_leitura;
    protected $id_consumo;
    protected $id_numero_imovel;
    protected $id_bloco;
    protected $vl_leitura;
    protected $vl_consumo_kg;
    protected $vl_consumo;
    protected $vl_total;
    protected $dt_leitura;
    
    function getIdLeitura() {
        return $this->id_leitura;
    }

    function getIdConsumo() {
        return $this->id_consumo;
    }

    function getIdNumeroImovel() {
        return $this->id_numero_imovel;
    }

    function getIdBloco() {
        return $this->id_bloco;
    }

    function getVlLeitura() {
        return $this->vl_leitura;
    }

    function getVlConsumo_kg() {
        return $this->vl_consumo_kg;
    }

    function getVlConsumo() {
        return $this->vl_consumo;
    }

    function getVlTotal() {
        return $this->vl_total;
    }

    function getDtLeitura() {
        return $this->dt_leitura;
    }

    function setIdLeitura($id_leitura) {
        $this->id_leitura = $id_leitura;
        return $this;
    }

    function setIdConsumo($id_consumo) {
        $this->id_consumo = $id_consumo;
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

    function setVlLeitura($vl_leitura) {
        $this->vl_leitura = $vl_leitura;
        return $this;
    }

    function setVlConsumo_kg($vl_consumo_kg) {
        $this->vl_consumo_kg = $vl_consumo_kg;
        return $this;
    }

    function setVlConsumo($vl_consumo) {
        $this->vl_consumo = $vl_consumo;
        return $this;
    }

    function setVlTotal($vl_total) {
        $this->vl_total = $vl_total;
        return $this;
    }

    function setDtLeitura($dt_leitura) {
        $this->dt_leitura = $dt_leitura;
        return $this;
    }


}
