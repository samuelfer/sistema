<?php
namespace SindicoAmigo\V1\Rest\Chaves;

class ChavesEntity
{
    protected $id_chaves;
    protected $id_numero_imovel;
    protected $id_bloco;
    protected $id_tipo_chaves;
    protected $id_morador;
    protected $dt_data_entrada_chaves;
    protected $hr_hora_entrada_chaves;
    protected $dt_data_saida_chaves;
    protected $hr_hora_saida_chaves;
    protected $de_obs_chaves;
    
    function getIdChaves() {
        return $this->id_chaves;
    }

    function getIdNumeroImovel() {
        return $this->id_numero_imovel;
    }

    function getIdBloco() {
        return $this->id_bloco;
    }

    function getIdTipoChaves() {
        return $this->id_tipo_chaves;
    }

    function getIdMorador() {
        return $this->id_morador;
    }

    function getDtDataEntradaChaves() {
        return $this->dt_data_entrada_chaves;
    }

    function getHrHoraEntradaChaves() {
        return $this->hr_hora_entrada_chaves;
    }

    function getDtDataSaidaChaves() {
        return $this->dt_data_saida_chaves;
    }

    function getHrHoraSaidaChaves() {
        return $this->hr_hora_saida_chaves;
    }

    function getDeObsChaves() {
        return $this->de_obs_chaves;
    }

    function setIdChaves($id_chaves) {
        $this->id_chaves = $id_chaves;
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

    function setIdTipoChaves($id_tipo_chaves) {
        $this->id_tipo_chaves = $id_tipo_chaves;
        return $this;
    }

    function setIdMorador($id_morador) {
        $this->id_morador = $id_morador;
        return $this;
    }

    function setDtDataEntradaChaves($dt_data_entrada_chaves) {
        $this->dt_data_entrada_chaves = $dt_data_entrada_chaves;
        return $this;
    }

    function setHrHoraEntradaChaves($hr_hora_entrada_chaves) {
        $this->hr_hora_entrada_chaves = $hr_hora_entrada_chaves;
        return $this;
    }

    function setDtDataSaidaChaves($dt_data_saida_chaves) {
        $this->dt_data_saida_chaves = $dt_data_saida_chaves;
        return $this;
    }

    function setHrHoraSaidaChaves($hr_hora_saida_chaves) {
        $this->hr_hora_saida_chaves = $hr_hora_saida_chaves;
        return $this;
    }

    function setDeObsChaves($de_obs_chaves) {
        $this->de_obs_chaves = $de_obs_chaves;
        return $this;
    }


    
}
