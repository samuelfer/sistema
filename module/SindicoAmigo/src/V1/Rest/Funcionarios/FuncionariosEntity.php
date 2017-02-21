<?php
namespace SindicoAmigo\V1\Rest\Funcionarios;

//Classe que representa a tabela funcionarios da base de dados
class FuncionariosEntity
{
    protected $id_funcionarios;
    protected $id_tipo_funcionarios;
    protected $dt_data;
    protected $id_cbo;
    protected $dt_data_recisao;
    protected $de_ativo_sn;
    protected $de_estado_civil;
    protected $de_nome_mae;
    protected $de_nome_pai;
    protected $id_pessoa;

    /**
     * @return mixed
     */
    public function getIdFuncionarios()
    {
        return $this->id_funcionarios;
    }

    /**
     * @param mixed $id_funcionarios
     * @return FuncionariosEntity
     */
    public function setIdFuncionarios($id_funcionarios)
    {
        $this->id_funcionarios = $id_funcionarios;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdTipoFuncionarios()
    {
        return $this->id_tipo_funcionarios;
    }

    /**
     * @param mixed $id_tipo_funcionarios
     * @return FuncionariosEntity
     */
    public function setIdTipoFuncionarios($id_tipo_funcionarios)
    {
        $this->id_tipo_funcionarios = $id_tipo_funcionarios;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtData()
    {
        return $this->dt_data;
    }

    /**
     * @param mixed $dt_data
     * @return FuncionariosEntity
     */
    public function setDtData($dt_data)
    {
        $this->dt_data = $dt_data;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdCbo()
    {
        return $this->id_cbo;
    }

    /**
     * @param mixed $id_cbo
     * @return FuncionariosEntity
     */
    public function setIdCbo($id_cbo)
    {
        $this->id_cbo = $id_cbo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtDataRecisao()
    {
        return $this->dt_data_recisao;
    }

    /**
     * @param mixed $dt_data_recisao
     * @return FuncionariosEntity
     */
    public function setDtDataRecisao($dt_data_recisao)
    {
        $this->dt_data_recisao = $dt_data_recisao;
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
     * @return FuncionariosEntity
     */
    public function setDeAtivoSn($de_ativo_sn)
    {
        $this->de_ativo_sn = $de_ativo_sn;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeEstadoCivil()
    {
        return $this->de_estado_civil;
    }

    /**
     * @param mixed $de_estado_civil
     * @return FuncionariosEntity
     */
    public function setDeEstadoCivil($de_estado_civil)
    {
        $this->de_estado_civil = $de_estado_civil;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeNomeMae()
    {
        return $this->de_nome_mae;
    }

    /**
     * @param mixed $de_nome_mae
     * @return FuncionariosEntity
     */
    public function setDeNomeMae($de_nome_mae)
    {
        $this->de_nome_mae = $de_nome_mae;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeNomePai()
    {
        return $this->de_nome_pai;
    }

    /**
     * @param mixed $de_nome_pai
     * @return FuncionariosEntity
     */
    public function setDeNomePai($de_nome_pai)
    {
        $this->de_nome_pai = $de_nome_pai;
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
     * @return FuncionariosEntity
     */
    public function setIdPessoa($id_pessoa)
    {
        $this->id_pessoa = $id_pessoa;
        return $this;
    }

    
}
