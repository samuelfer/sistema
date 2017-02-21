<?php
namespace SindicoAmigo\V1\Rest\Multanotificacao;

class MultanotificacaoEntity
{
    protected $id_multa_notificacao;
    protected $id_condominio;
    protected $id_numero_imovel;
    protected $id_bloco;
    protected $id_tipo_multa_notificacao;
    protected $de_multa_notificacao;
    protected $dt_data_multa_notificacao;
    protected $nu_valor_multa_notificacao;
    protected $de_valor_multa_notificacao;
    protected $de_liquidado_sn;
    protected $de_observacao_multa_notificacao;
    protected $de_conduta;
   
    function getIdMultaNotificacao() {
        return $this->id_multa_notificacao;
    }

    function getIdCondominio() {
        return $this->id_condominio;
    }

    function getIdNumeroImovel() {
        return $this->id_numero_imovel;
    }

    function getIdBloco() {
        return $this->id_bloco;
    }

    function getIdTipoMultaNotificacao() {
        return $this->id_tipo_multa_notificacao;
    }

    function getDeMultaNotificacao() {
        return $this->de_multa_notificacao;
    }

    function getDtDataMultaNotificacao() {
        return $this->dt_data_multa_notificacao;
    }

    function getNuValorMultaNotificacao() {
        return $this->nu_valor_multa_notificacao;
    }

    function getDeValorMultaNotificacao() {
        return $this->de_valor_multa_notificacao;
    }

    function getDeLiquidadoSn() {
        return $this->de_liquidado_sn;
    }

    function getDeObservacaoMultaNotificacao() {
        return $this->de_observacao_multa_notificacao;
    }

    function getDeConduta() {
        return $this->de_conduta;
    }

    function setIdMultaNotificacao($id_multa_notificacao) {
        $this->id_multa_notificacao = $id_multa_notificacao;
        return $this;
    }

    function setIdCondominio($id_condominio) {
        $this->id_condominio = $id_condominio;
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

    function setIdTipoMultaNotificacao($id_tipo_multa_notificacao) {
        $this->id_tipo_multa_notificacao = $id_tipo_multa_notificacao;
        return $this;
    }

    function setDeMultaNotificacao($de_multa_notificacao) {
        $this->de_multa_notificacao = $de_multa_notificacao;
        return $this;
    }

    function setDtDataMultaNotificacao($dt_data_multa_notificacao) {
        $this->dt_data_multa_notificacao = $dt_data_multa_notificacao;
        return $this;
    }

    function setNuValorMultaNotificacao($nu_valor_multa_notificacao) {
        $this->nu_valor_multa_notificacao = $nu_valor_multa_notificacao;
        return $this;
    }

    function setDeValorMultaNotificacao($de_valor_multa_notificacao) {
        $this->de_valor_multa_notificacao = $de_valor_multa_notificacao;
        return $this;
    }

    function setDeLiquidadoSn($de_liquidado_sn) {
        $this->de_liquidado_sn = $de_liquidado_sn;
        return $this;
    }

    function setDeObservacaoMultaNotificacao($de_observacao_multa_notificacao) {
        $this->de_observacao_multa_notificacao = $de_observacao_multa_notificacao;
        return $this;
    }

    function setDeConduta($de_conduta) {
        $this->de_conduta = $de_conduta;
        return $this;
    }
    
}
