<?php
namespace SindicoAmigo\V1\Rest\Animal;

/**
 * @author pbsoft02
 *
 */
class AnimalEntity
{
	protected $id_animal;
	protected $id_raca;
	protected $id_especie;
	protected $img_animal;
	protected $id_numero_imovel;
	protected $id_bloco;
	protected $st_vacinado;
	
	function getIdAnimal() {
            return $this->id_animal;
        }

        function getIdRaca() {
            return $this->id_raca;
        }

        function getIdEspecie() {
            return $this->id_especie;
        }

        function getImgAnimal() {
            return $this->img_animal;
        }

        function getIdNumeroImovel() {
            return $this->id_numero_imovel;
        }

        function getIdBloco() {
            return $this->id_bloco;
        }

        function getStVacinado() {
            return $this->st_vacinado;
        }

        function setIdAnimal($id_animal) {
            $this->id_animal = $id_animal;
            return $this;
        }

        function setIdRaca($id_raca) {
            $this->id_raca = $id_raca;
            return $this;
        }

        function setIdEspecie($id_especie) {
            $this->id_especie = $id_especie;
            return $this;
        }

        function setImgAnimal($img_animal) {
            $this->img_animal = $img_animal;
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

        function setStvVacinado($st_vacinado) {
            $this->st_vacinado = $st_vacinado;
            return $this;
        }


}
