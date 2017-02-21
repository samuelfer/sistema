<?php
namespace SindicoAmigo\V1\Rest\Banco;

use ArrayObject;

class BancoEntity extends ArrayObject
{
    protected $id_cbo;
    protected $de_cbo;
    
    function getIdCbo() {
        return $this->id_cbo;
    }

    function getDeCbo() {
        return $this->de_cbo;
    }

    function setIdCbo($id_cbo) {
        $this->id_cbo = $id_cbo;
        return $this;
    }

    function setDeCbo($de_cbo) {
        $this->de_cbo = $de_cbo;
        return $this;
    }
}
