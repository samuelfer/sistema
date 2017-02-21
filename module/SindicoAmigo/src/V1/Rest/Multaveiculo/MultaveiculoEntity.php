<?php
namespace SindicoAmigo\V1\Rest\Multaveiculo;

class MultaveiculoEntity
{
    protected $id_multa_veiculo;
    protected $id_multa_notificacao;
    protected $dt_hr_trava;
    protected $nu_placa;
    
    function getIdMultaVeiculo() {
        return $this->id_multa_veiculo;
    }

    function getIdMultaNotificacao() {
        return $this->id_multa_notificacao;
    }

    function getDtHrTrava() {
        return $this->dt_hr_trava;
    }

    function getNuPlaca() {
        return $this->nu_placa;
    }

    function setIdMultaVeiculo($id_multa_veiculo) {
        $this->id_multa_veiculo = $id_multa_veiculo;
        return $this;
    }

    function setIdMultaNotificacao($id_multa_notificacao) {
        $this->id_multa_notificacao = $id_multa_notificacao;
        return $this;
    }

    function setDtHrTrava($dt_hr_trava) {
        $this->dt_hr_trava = $dt_hr_trava;
        return $this;
    }

    function setNuPlaca($nu_placa) {
        $this->nu_placa = $nu_placa;
        return $this;
    }


}
