<?php
namespace SindicoAmigo\V1\Rest\Proprietario;

//Classe que representa a tabela proprietario da base de dados
class ProprietarioEntity
{
    protected $id_proprietario;
    protected $id_pessoa;
    protected $de_ativo_sn;
    protected $observacao;

    /**
     * @return mixed
     */
    public function getIdProprietario()
    {
        return $this->id_proprietario;
    }

    /**
     * @param mixed $id_proprietario
     * @return ProprietarioEntity
     */
    public function setIdProprietario($id_proprietario)
    {
        $this->id_proprietario = $id_proprietario;
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
     * @return ProprietarioEntity
     */
    public function setIdPessoa($id_pessoa)
    {
        $this->id_pessoa = $id_pessoa;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeAtivoSn()
    {
        return $this->de_ativo_sn;
    }

    /**
     * @param mixed $de_ativo_sn
     * @return ProprietarioEntity
     */
    public function setDeAtivoSn($de_ativo_sn)
    {
        $this->de_ativo_sn = $de_ativo_sn;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * @param mixed $observacao
     * @return ProprietarioEntity
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;
        return $this;
    }

    
}
