<?php
namespace SindicoAmigo\V1\Rest\Modeloveiculo;

class ModeloveiculoEntity
{
    protected $id_modelo_veiculo;
    protected $de_modelo_veiculo;
    protected $id_fabricante;
    
    function getIdModeloVeiculo() {
        return $this->id_modelo_veiculo;
    }

    function getDeModeloVeiculo() {
        return $this->de_modelo_veiculo;
    }

    function getIdFabricante() {
        return $this->id_fabricante;
    }

    function setIdModeloVeiculo($id_modelo_veiculo) {
        $this->id_modelo_veiculo = $id_modelo_veiculo;
        return $this;
    }

    function setDeModeloVeiculo($de_modelo_veiculo) {
        $this->de_modelo_veiculo = $de_modelo_veiculo;
        return $this;
    }

    function setIdFabricante($id_fabricante) {
        $this->id_fabricante = $id_fabricante;
        return $this;
    }


}
