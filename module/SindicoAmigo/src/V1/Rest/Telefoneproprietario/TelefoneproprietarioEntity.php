<?php
namespace SindicoAmigo\V1\Rest\Telefoneproprietario;

class TelefoneproprietarioEntity
{
    protected $id_telefone_proprietario;
    protected $id_proprietario;
    protected $nu_telefone;
    
    function getIdTelefoneProprietario() {
        return $this->id_telefone_proprietario;
    }

    function getIdProprietario() {
        return $this->id_proprietario;
    }

    function getNuTelefone() {
        return $this->nu_telefone;
    }

    function setIdTelefoneProprietario($id_telefone_proprietario) {
        $this->id_telefone_proprietario = $id_telefone_proprietario;
        return $this;
    }

    function setIdProprietario($id_proprietario) {
        $this->id_proprietario = $id_proprietario;
        return $this;
    }

    function setNuTelefone($nu_telefone) {
        $this->nu_telefone = $nu_telefone;
        return $this;
    }


}
