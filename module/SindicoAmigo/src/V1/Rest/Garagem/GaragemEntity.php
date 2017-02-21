<?php
namespace SindicoAmigo\V1\Rest\Garagem;

class GaragemEntity
{
    protected $id_garagem;
    protected $id_numero_imovel;
    protected $id_bloco;
    protected $id_setor;
    protected $de_imagem_garagem;

    /**
     * @return mixed
     */
    public function getIdGaragem()
    {
        return $this->id_garagem;
    }

    /**
     * @param mixed $id_garagem
     * @return GaragemEntity
     */
    public function setIdGaragem($id_garagem)
    {
        $this->id_garagem = $id_garagem;
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
     * @return GaragemEntity
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
     * @return GaragemEntity
     */
    public function setIdBloco($id_bloco)
    {
        $this->id_bloco = $id_bloco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdSetor()
    {
        return $this->id_setor;
    }

    /**
     * @param mixed $id_setor
     * @return GaragemEntity
     */
    public function setIdSetor($id_setor)
    {
        $this->id_setor = $id_setor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeImagemGaragem()
    {
        return $this->de_imagem_garagem;
    }

    /**
     * @param mixed $de_imagem_garagem
     * @return GaragemEntity
     */
    public function setDeImagemGaragem($de_imagem_garagem)
    {
        $this->de_imagem_garagem = $de_imagem_garagem;
        return $this;
    }

    
}
