<?php
namespace SindicoAmigo\V1\Rest\Multa;

class MultaEntity
{
    protected $id_multa;
    protected $id_multa_notificacao;
    protected $dt_hr_constatacao;
    protected $de_testemunha;
   
    function getIdMulta() {
        return $this->id_multa;
    }

    function getIdMultaNotificacao() {
        return $this->id_multa_notificacao;
    }

    function getDtHrConstatacao() {
        return $this->dt_hr_constatacao;
    }

    function getDeTestemunha() {
        return $this->de_testemunha;
    }

    function setIdMulta($id_multa) {
        $this->id_multa = $id_multa;
        return $this;
    }

    function setIdMultaNotificacao($id_multa_notificacao) {
        $this->id_multa_notificacao = $id_multa_notificacao;
        return $this;
    }

    function setDtHrConstatacao($dt_hr_constatacao) {
        $this->dt_hr_constatacao = $dt_hr_constatacao;
        return $this;
    }

    function setDeTestemunha($de_testemunha) {
        $this->de_testemunha = $de_testemunha;
        return $this;
    }


}
