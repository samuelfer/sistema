<?php
namespace SindicoAmigo\V1\Rest\Ocorrenciamorador;

class OcorrenciamoradorEntity
{
    protected $id_ocorrencia_morador;
    protected $id_morador;
    protected $id_numero_imovel;
    protected $id_bloco;
    protected $id_tipo_ocorrencia;
    protected $dt_hr_ocorrencia;
    protected $de_descricao_ocorrencia;
    protected $img_ocorrencia;
    protected $nu_placa;
    protected $de_marca_modelo;
    protected $st_visto;
    protected $feedback;
    protected $id_ocorrencia_relacionada;
    protected $de_observacao;

    /**
     * @return mixed
     */
    public function getIdOcorrenciaMorador()
    {
        return $this->id_ocorrencia_morador;
    }

    /**
     * @param mixed $id_ocorrencia_morador
     * @return OcorrenciamoradorEntity
     */
    public function setIdOcorrenciaMorador($id_ocorrencia_morador)
    {
        $this->id_ocorrencia_morador = $id_ocorrencia_morador;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdMorador()
    {
        return $this->id_morador;
    }

    /**
     * @param mixed $id_morador
     * @return OcorrenciamoradorEntity
     */
    public function setIdMorador($id_morador)
    {
        $this->id_morador = $id_morador;
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
     * @return OcorrenciamoradorEntity
     */
    public function setIdNumeroImovel($id_numero_imovel)
    {
        $this->id_numero_imovel = $id_numero_imovel;
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
     * @return OcorrenciamoradorEntity
     */
    public function setIdBloco($id_bloco)
    {
        $this->id_bloco = $id_bloco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdTipoOcorrencia()
    {
        return $this->id_tipo_ocorrencia;
    }

    /**
     * @param mixed $id_tipo_ocorrencia
     * @return OcorrenciamoradorEntity
     */
    public function setIdTipoOcorrencia($id_tipo_ocorrencia)
    {
        $this->id_tipo_ocorrencia = $id_tipo_ocorrencia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtHrOcorrencia()
    {
        return $this->dt_hr_ocorrencia;
    }

    /**
     * @param mixed $dt_hr_ocorrencia
     * @return OcorrenciamoradorEntity
     */
    public function setDtHrOcorrencia($dt_hr_ocorrencia)
    {
        $this->dt_hr_ocorrencia = $dt_hr_ocorrencia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeDescricaoOcorrencia()
    {
        return $this->de_descricao_ocorrencia;
    }

    /**
     * @param mixed $de_descricao_ocorrencia
     * @return OcorrenciamoradorEntity
     */
    public function setDeDescricaoOcorrencia($de_descricao_ocorrencia)
    {
        $this->de_descricao_ocorrencia = $de_descricao_ocorrencia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImgOcorrencia()
    {
        return $this->img_ocorrencia;
    }

    /**
     * @param mixed $img_ocorrencia
     * @return OcorrenciamoradorEntity
     */
    public function setImgOcorrencia($img_ocorrencia)
    {
        $this->img_ocorrencia = $img_ocorrencia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNuPlaca()
    {
        return $this->nu_placa;
    }

    /**
     * @param mixed $nu_placa
     * @return OcorrenciamoradorEntity
     */
    public function setNuPlaca($nu_placa)
    {
        $this->nu_placa = $nu_placa;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeMarcaModelo()
    {
        return $this->de_marca_modelo;
    }

    /**
     * @param mixed $de_marca_modelo
     * @return OcorrenciamoradorEntity
     */
    public function setDeMarcaModelo($de_marca_modelo)
    {
        $this->de_marca_modelo = $de_marca_modelo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStVisto()
    {
        return $this->st_visto;
    }

    /**
     * @param mixed $st_visto
     * @return OcorrenciamoradorEntity
     */
    public function setStVisto($st_visto)
    {
        $this->st_visto = $st_visto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * @param mixed $feedback
     * @return OcorrenciamoradorEntity
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdOcorrenciaRelacionada()
    {
        return $this->id_ocorrencia_relacionada;
    }

    /**
     * @param mixed $id_ocorrencia_relacionada
     * @return OcorrenciamoradorEntity
     */
    public function setIdOcorrenciaRelacionada($id_ocorrencia_relacionada)
    {
        $this->id_ocorrencia_relacionada = $id_ocorrencia_relacionada;
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
     * @return OcorrenciamoradorEntity
     */
    public function setDeObservacao($de_observacao)
    {
        $this->de_observacao = $de_observacao;
        return $this;
    }

    
}
