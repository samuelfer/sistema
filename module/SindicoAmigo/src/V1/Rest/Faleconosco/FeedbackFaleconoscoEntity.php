<?php
namespace SindicoAmigo\V1\Rest\Faleconosco;

class FeedbackFaleconoscoEntity
{
    protected $id_feedback_fale_conosco;
    protected $id_fale_conosco;
    protected $de_mensagem;
    protected $login;
    protected $dt_feedback;

    function getIdFeedbackFaleConosco() {
        return $this->id_feedback_fale_conosco;
    }

    function getIdFaleConosco() {
        return $this->id_fale_conosco;
    }

    function getDeMensagem() {
        return $this->de_mensagem;
    }

    function getLogin() {
        return $this->login;
    }

    function getDtFeedback() {
        return $this->dt_feedback;
    }

    function setIdFeedbackFaleConosco($id_feedback_fale_conosco) {
        $this->id_feedback_fale_conosco = $id_feedback_fale_conosco;
        return $this;
    }

    function setIdFaleConosco($id_fale_conosco) {
        $this->id_fale_conosco = $id_fale_conosco;
        return $this;
    }

    function setDeMensagem($de_mensagem) {
        $this->de_mensagem = $de_mensagem;
        return $this;
    }

    function setLogin($login) {
        $this->login = $login;
        return $this;
    }

    function setDtFeedback($dt_feedback) {
        $this->dt_feedback = $dt_feedback;
        return $this;
    }


}
