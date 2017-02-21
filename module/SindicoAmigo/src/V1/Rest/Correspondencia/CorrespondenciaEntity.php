<?php
namespace SindicoAmigo\V1\Rest\Correspondencia;

class CorrespondenciaEntity
{
    protected $id_correspondencia;
    protected $id_bloco;
    protected $id_numero_imovel;
    protected $de_remente;
    protected $dt_chegada;
    protected $hr_chegada;
    protected $dt_entrega;
    protected $hr_entrega;
    protected $de_recebedor;
    protected $st_entregue;
    protected $de_observacao;

    /**
     * @return mixed
     */
    public function getIdCorrespondencia()
    {
        return $this->id_correspondencia;
    }

    /**
     * @param mixed $id_correspondencia
     * @return CorrespondenciaEntity
     */
    public function setIdCorrespondencia($id_correspondencia)
    {
        $this->id_correspondencia = $id_correspondencia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdBloco()
    {
        return $this->id_bloco;
    }

    /**
     * @param mixed $id_bloco
     * @return CorrespondenciaEntity
     */
    public function setIdBloco($id_bloco)
    {
        $this->id_bloco = $id_bloco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdNumeroImovel()
    {
        return $this->id_numero_imovel;
    }

    /**
     * @param mixed $id_numero_imovel
     * @return CorrespondenciaEntity
     */
    public function setIdNumeroImovel($id_numero_imovel)
    {
        $this->id_numero_imovel = $id_numero_imovel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeRemente()
    {
        return $this->de_remente;
    }

    /**
     * @param mixed $de_remente
     * @return CorrespondenciaEntity
     */
    public function setDeRemente($de_remente)
    {
        $this->de_remente = $de_remente;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtChegada()
    {
        return $this->dt_chegada;
    }

    /**
     * @param mixed $dt_chegada
     * @return CorrespondenciaEntity
     */
    public function setDtChegada($dt_chegada)
    {
        $this->dt_chegada = $dt_chegada;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHrChegada()
    {
        return $this->hr_chegada;
    }

    /**
     * @param mixed $hr_chegada
     * @return CorrespondenciaEntity
     */
    public function setHrChegada($hr_chegada)
    {
        $this->hr_chegada = $hr_chegada;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtEntrega()
    {
        return $this->dt_entrega;
    }

    /**
     * @param mixed $dt_entrega
     * @return CorrespondenciaEntity
     */
    public function setDtEntrega($dt_entrega)
    {
        $this->dt_entrega = $dt_entrega;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHrEntrega()
    {
        return $this->hr_entrega;
    }

    /**
     * @param mixed $hr_entrega
     * @return CorrespondenciaEntity
     */
    public function setHrEntrega($hr_entrega)
    {
        $this->hr_entrega = $hr_entrega;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeRecebedor()
    {
        return $this->de_recebedor;
    }

    /**
     * @param mixed $de_recebedor
     * @return CorrespondenciaEntity
     */
    public function setDeRecebedor($de_recebedor)
    {
        $this->de_recebedor = $de_recebedor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStEntregue()
    {
        return $this->st_entregue;
    }

    /**
     * @param mixed $st_entregue
     * @return CorrespondenciaEntity
     */
    public function setStEntregue($st_entregue)
    {
        $this->st_entregue = $st_entregue;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeObservacao()
    {
        return $this->de_observacao;
    }

    /**
     * @param mixed $de_observacao
     * @return CorrespondenciaEntity
     */
    public function setDeObservacao($de_observacao)
    {
        $this->de_observacao = $de_observacao;
        return $this;
    }

}
