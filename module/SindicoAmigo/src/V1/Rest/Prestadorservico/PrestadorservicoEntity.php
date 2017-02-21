<?php
namespace SindicoAmigo\V1\Rest\Prestadorservico;

class PrestadorservicoEntity
{
    protected $id_prestador;
    protected $id_tipo_servico;
    protected $id_banco;
    protected $nu_agencia;
    protected $nu_conta;
    protected $id_tipo_conta;
    protected $nu_operacao;
    protected $media;
    protected $de_ativo_sn;
    protected $permissao;
    protected $id_pessoa;

    function getId_prestador() {
        return $this->id_prestador;
    }

    function getId_tipo_servico() {
        return $this->id_tipo_servico;
    }

    function getId_banco() {
        return $this->id_banco;
    }

    function getNu_agencia() {
        return $this->nu_agencia;
    }

    function getNu_conta() {
        return $this->nu_conta;
    }

    function getId_tipo_conta() {
        return $this->id_tipo_conta;
    }

    function getNu_operacao() {
        return $this->nu_operacao;
    }

    function getMedia() {
        return $this->media;
    }

    function getDe_ativo_sn() {
        return $this->de_ativo_sn;
    }

    function getPermissao() {
        return $this->permissao;
    }

    function getId_pessoa() {
        return $this->id_pessoa;
    }

    function setId_prestador($id_prestador) {
        $this->id_prestador = $id_prestador;
        return $this;
    }

    function setId_tipo_servico($id_tipo_servico) {
        $this->id_tipo_servico = $id_tipo_servico;
        return $this;
    }

    function setId_banco($id_banco) {
        $this->id_banco = $id_banco;
        return $this;
    }

    function setNu_agencia($nu_agencia) {
        $this->nu_agencia = $nu_agencia;
        return $this;
    }

    function setNu_conta($nu_conta) {
        $this->nu_conta = $nu_conta;
        return $this;
    }

    function setId_tipo_conta($id_tipo_conta) {
        $this->id_tipo_conta = $id_tipo_conta;
        return $this;
    }

    function setNu_operacao($nu_operacao) {
        $this->nu_operacao = $nu_operacao;
        return $this;
    }

    function setMedia($media) {
        $this->media = $media;
        return $this;
    }

    function setDe_ativo_sn($de_ativo_sn) {
        $this->de_ativo_sn = $de_ativo_sn;
        return $this;
    }

    function setPermissao($permissao) {
        $this->permissao = $permissao;
        return $this;
    }

    function setId_pessoa($id_pessoa) {
        $this->id_pessoa = $id_pessoa;
        return $this;
    }

}
