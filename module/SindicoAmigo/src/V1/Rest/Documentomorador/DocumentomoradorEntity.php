<?php
namespace SindicoAmigo\V1\Rest\Documentomorador;

class DocumentomoradorEntity
{
    protected $id_morador;
    protected $nu_cpf;
    protected $nu_rg;
    protected $nu_rne;
    protected $de_orgao_emissor;
    protected $de_uf;
    
    function getIdMorador() {
        return $this->id_morador;
    }

    function getNuCpf() {
        return $this->nu_cpf;
    }

    function getNuRg() {
        return $this->nu_rg;
    }

    function getNuRne() {
        return $this->nu_rne;
    }

    function getDeOrgaoEmissor() {
        return $this->de_orgao_emissor;
    }

    function getDeUf() {
        return $this->de_uf;
    }

    function setIdMorador($id_morador) {
        $this->id_morador = $id_morador;
        return $this;
    }

    function setNuCpf($nu_cpf) {
        $this->nu_cpf = $nu_cpf;
        return $this;
    }

    function setNuRg($nu_rg) {
        $this->nu_rg = $nu_rg;
        return $this;
    }

    function setNuRne($nu_rne) {
        $this->nu_rne = $nu_rne;
        return $this;
    }

    function setDeOrgaoEmissor($de_orgao_emissor) {
        $this->de_orgao_emissor = $de_orgao_emissor;
        return $this;
    }

    function setDeUf($de_uf) {
        $this->de_uf = $de_uf;
        return $this;
    }


}
