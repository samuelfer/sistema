<?php
namespace SindicoAmigo\V1\Rest\Comunicacao;

class ComunicacaoEntity
{
    protected $id_comunicacao;
    protected $dt_comunicacao;
    protected $de_texto;
    protected $id_bloco;
    protected $id_numero_imovel;
    protected $id_morador;
    protected $de_email;

    /**
     * @return mixed
     */
    public function getIdComunicacao()
    {
        return $this->id_comunicacao;
    }

    /**
     * @param mixed $id_comunicacao
     * @return ComunicacaoEntity
     */
    public function setIdComunicacao($id_comunicacao)
    {
        $this->id_comunicacao = $id_comunicacao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtComunicacao()
    {
        return $this->dt_comunicacao;
    }

    /**
     * @param mixed $dt_comunicacao
     * @return ComunicacaoEntity
     */
    public function setDtComunicacao($dt_comunicacao)
    {
        $this->dt_comunicacao = $dt_comunicacao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeTexto()
    {
        return $this->de_texto;
    }

    /**
     * @param mixed $de_texto
     * @return ComunicacaoEntity
     */
    public function setDeTexto($de_texto)
    {
        $this->de_texto = $de_texto;
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
     * @return ComunicacaoEntity
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
     * @return ComunicacaoEntity
     */
    public function setIdNumeroImovel($id_numero_imovel)
    {
        $this->id_numero_imovel = $id_numero_imovel;
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
     * @return ComunicacaoEntity
     */
    public function setIdMorador($id_morador)
    {
        $this->id_morador = $id_morador;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeEmail()
    {
        return $this->de_email;
    }

    /**
     * @param mixed $de_email
     * @return ComunicacaoEntity
     */
    public function setDeEmail($de_email)
    {
        $this->de_email = $de_email;
        return $this;
    }

    
}
