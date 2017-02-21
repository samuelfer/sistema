<?php
namespace SindicoAmigo\V1\Rest\Achadosperdidos;

class AchadosperdidosEntity
{
    protected $id_achados_perdidos;
    protected $de_local;
    protected $de_item;
    protected $dt_achados_perdidos;
    protected $img_item;
    protected $st_item;
    protected $id_bloco;
    protected $id_numero_imovel;
    protected $de_perdeu;
    protected $id_funcionario;
    protected $id_morador;
    protected $st_entregue;
    protected $dt_entregue;
    protected $hr_entrega;
    
    function getIdAchadosPerdidos() {
        return $this->id_achados_perdidos;
    }

    function getDeLocal() {
        return $this->de_local;
    }

    function getDeItem() {
        return $this->de_item;
    }

    function getDtAchadosPerdidos() {
        return $this->dt_achados_perdidos;
    }

    function getImgItem() {
        return $this->img_item;
    }

    function getStItem() {
        return $this->st_item;
    }

    function getIdBloco() {
        return $this->id_bloco;
    }

    function getIdNumeroImovel() {
        return $this->id_numero_imovel;
    }

    function getDe_perdeu() {
        return $this->de_perdeu;
    }

    function getIdFuncionario() {
        return $this->id_funcionario;
    }

    function getIdMorador() {
        return $this->id_morador;
    }

    function getStEntregue() {
        return $this->st_entregue;
    }

    function getDtEntregue() {
        return $this->dt_entregue;
    }

    function getHrEntrega() {
        return $this->hr_entrega;
    }

    function setIdAchadosPerdidos($id_achados_perdidos) {
        $this->id_achados_perdidos = $id_achados_perdidos;
        return $this;
    }

    function setDeLocal($de_local) {
        $this->de_local = $de_local;
        return $this;
    }

    function setDeItem($de_item) {
        $this->de_item = $de_item;
        return $this;
    }

    function setDtAchadosPerdidos($dt_achados_perdidos) {
        $this->dt_achados_perdidos = $dt_achados_perdidos;
        return $this;
    }

    function setImgItem($img_item) {
        $this->img_item = $img_item;
        return $this;
    }

    function setStItem($st_item) {
        $this->st_item = $st_item;
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

    function setDePerdeu($de_perdeu) {
        $this->de_perdeu = $de_perdeu;
        return $this;
    }

    function setIdFuncionario($id_funcionario) {
        $this->id_funcionario = $id_funcionario;
        return $this;
    }

    function setIdMorador($id_morador) {
        $this->id_morador = $id_morador;
        return $this;
    }

    function setStEntregue($st_entregue) {
        $this->st_entregue = $st_entregue;
        return $this;
    }

    function setDtEntregue($dt_entregue) {
        $this->dt_entregue = $dt_entregue;
        return $this;
    }

    function setHrEntrega($hr_entrega) {
        $this->hr_entrega = $hr_entrega;
        return $this;
    }


}
