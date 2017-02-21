<?php
namespace SindicoAmigo\V1\Rest\Consumogas;

class ConsumogasEntity
{
    protected $id_consumo;
    protected $dt_lancamento;
    protected $dt_leitura;
    protected $coeficiente;
    protected $vl_quilo;
    protected $vl_taxa;
    protected $mes_ano;
    protected $id_condominio;
    
    function getIdConsumo() {
        return $this->id_consumo;
    }

    function getDtLancamento() {
        return $this->dt_lancamento;
    }

    function getDtLeitura() {
        return $this->dt_leitura;
    }

    function getCoeficiente() {
        return $this->coeficiente;
    }

    function getVlQuilo() {
        return $this->vl_quilo;
    }

    function getVlTaxa() {
        return $this->vl_taxa;
    }

    function getMesAno() {
        return $this->mes_ano;
    }

    function getIdCondominio() {
        return $this->id_condominio;
    }

    function setIdConsumo($id_consumo) {
        $this->id_consumo = $id_consumo;
        return $this;
    }

    function setDtLancamento($dt_lancamento) {
        $this->dt_lancamento = $dt_lancamento;
        return $this;
    }

    function setDtLeitura($dt_leitura) {
        $this->dt_leitura = $dt_leitura;
        return $this;
    }

    function setCoeficiente($coeficiente) {
        $this->coeficiente = $coeficiente;
        return $this;
    }

    function setVlQuilo($vl_quilo) {
        $this->vl_quilo = $vl_quilo;
        return $this;
    }

    function setVlTaxa($vl_taxa) {
        $this->vl_taxa = $vl_taxa;
        return $this;
    }

    function setMesAno($mes_ano) {
        $this->mes_ano = $mes_ano;
        return $this;
    }

    function setIdCondominio($id_condominio) {
        $this->id_condominio = $id_condominio;
        return $this;
    }


}
