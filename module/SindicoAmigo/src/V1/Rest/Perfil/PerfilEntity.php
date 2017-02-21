<?php
namespace SindicoAmigo\V1\Rest\Perfil;

//Classe que representa a tabela pessoa da base de dados
class PerfilEntity
{
    protected $id_perfil;
    protected $id_pessoa;
    protected $id_tipoperfil;
    protected $dt_inicio;
    protected $dt_fim;
    protected $id_situacao;

    /**
     * @return mixed
     */
    public function getIdPerfil()
    {
        return $this->id_perfil;
    }

    /**
     * @param mixed $id_perfil
     * @return PerfilEntity
     */
    public function setIdPerfil($id_perfil)
    {
        $this->id_perfil = $id_perfil;
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
     * @return PerfilEntity
     */
    public function setIdPessoa($id_pessoa)
    {
        $this->id_pessoa = $id_pessoa;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdTipoperfil()
    {
        return $this->id_tipoperfil;
    }

    /**
     * @param mixed $id_tipoperfil
     * @return PerfilEntity
     */
    public function setIdTipoperfil($id_tipoperfil)
    {
        $this->id_tipoperfil = $id_tipoperfil;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtInicio()
    {
        return $this->dt_inicio;
    }

    /**
     * @param mixed $dt_inicio
     * @return PerfilEntity
     */
    public function setDtInicio($dt_inicio)
    {
        $this->dt_inicio = $dt_inicio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtFim()
    {
        return $this->dt_fim;
    }

    /**
     * @param mixed $dt_fim
     * @return PerfilEntity
     */
    public function setDtFim($dt_fim)
    {
        $this->dt_fim = $dt_fim;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdSituacao()
    {
        return $this->id_situacao;
    }

    /**
     * @param mixed $id_situacao
     * @return PerfilEntity
     */
    public function setIdSituacao($id_situacao)
    {
        $this->id_situacao = $id_situacao;
        return $this;
    }


}
