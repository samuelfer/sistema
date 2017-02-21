<?php
namespace SindicoAmigo\V1\Rest\Visitante;

class VisitanteEntity
{
    protected $id_visitante;
    protected $id_tipo_visitante;
    protected $id_numero_imovel;
    protected $id_bloco;
    protected $id_pessoa;

    /**
     * @return mixed
     */
    public function getIdVisitante()
    {
        return $this->id_visitante;
    }

    /**
     * @param mixed $id_visitante
     * @return VisitanteEntity
     */
    public function setIdVisitante($id_visitante)
    {
        $this->id_visitante = $id_visitante;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdTipoVisitante()
    {
        return $this->id_tipo_visitante;
    }

    /**
     * @param mixed $id_tipo_visitante
     * @return VisitanteEntity
     */
    public function setIdTipoVisitante($id_tipo_visitante)
    {
        $this->id_tipo_visitante = $id_tipo_visitante;
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
     * @return VisitanteEntity
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
     * @return VisitanteEntity
     */
    public function setIdBloco($id_bloco)
    {
        $this->id_bloco = $id_bloco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdPessoa()
    {
        return $this->id_pessoa;
    }

    /**
     * @param mixed $id_pessoa
     * @return VisitanteEntity
     */
    public function setIdPessoa($id_pessoa)
    {
        $this->id_pessoa = $id_pessoa;
        return $this;
    }

    
}
