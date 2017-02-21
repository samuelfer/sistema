<?php
namespace SindicoAmigo\V1\Rest\Imovel;

class ImovelEntity
{
    protected $id_numero_imovel;
    protected $id_bloco;
    protected $id_tipo_situacao_imovel;
    protected $de_metragem_imovel;
    protected $nu_quartos_imovel;
    protected $de_observacao_imovel;
    protected $id_proprietario;
    protected $usuario;

    /**
     * @return mixed
     */
    public function getIdNumeroImovel()
    {
        return $this->id_numero_imovel;
    }

    /**
     * @param mixed $id_numero_imovel
     * @return ImovelEntity
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
     * @return ImovelEntity
     */
    public function setIdBloco($id_bloco)
    {
        $this->id_bloco = $id_bloco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdTipoSituacaoImovel()
    {
        return $this->id_tipo_situacao_imovel;
    }

    /**
     * @param mixed $id_tipo_situacao_imovel
     * @return ImovelEntity
     */
    public function setIdTipoSituacaoImovel($id_tipo_situacao_imovel)
    {
        $this->id_tipo_situacao_imovel = $id_tipo_situacao_imovel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeMetragemImovel()
    {
        return $this->de_metragem_imovel;
    }

    /**
     * @param mixed $de_metragem_imovel
     * @return ImovelEntity
     */
    public function setDeMetragemImovel($de_metragem_imovel)
    {
        $this->de_metragem_imovel = $de_metragem_imovel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNuQuartosImovel()
    {
        return $this->nu_quartos_imovel;
    }

    /**
     * @param mixed $nu_quartos_imovel
     * @return ImovelEntity
     */
    public function setNuQuartosImovel($nu_quartos_imovel)
    {
        $this->nu_quartos_imovel = $nu_quartos_imovel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeObservacaoImovel()
    {
        return $this->de_observacao_imovel;
    }

    /**
     * @param mixed $de_observacao_imovel
     * @return ImovelEntity
     */
    public function setDeObservacaoImovel($de_observacao_imovel)
    {
        $this->de_observacao_imovel = $de_observacao_imovel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdProprietario()
    {
        return $this->id_proprietario;
    }

    /**
     * @param mixed $id_proprietario
     * @return ImovelEntity
     */
    public function setIdProprietario($id_proprietario)
    {
        $this->id_proprietario = $id_proprietario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     * @return ImovelEntity
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }
    
}
