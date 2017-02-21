<?php
namespace SindicoAmigo\V1\Rest\Pessoa;

//Classe que representa a tabela pessoa da base de dados
class PessoaEntity
{
    protected $id_pessoa;
    protected $dt_entrada;
    protected $no_pessoa;
    protected $im_pessoa;
    protected $dt_nascimento;
    protected $nu_telefone;
    protected $nu_celular;
    protected $nu_cpf_cnpj;
    protected $de_email;
    protected $nu_rg;
    protected $nu_cep;
    protected $de_bairro;
    protected $de_cidade;
    protected $nu_logradouro;
    protected $de_logradouro;
    protected $de_complemento;
    protected $de_uf;
    protected $de_observacao;
    protected $id_tipopessoa;

    /**
     * @return mixed
     */
    public function getIdPessoa()
    {
        return $this->id_pessoa;
    }

    /**
     * @param mixed $id_pessoa
     * @return PessoaEntity
     */
    public function setIdPessoa($id_pessoa)
    {
        $this->id_pessoa = $id_pessoa;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtEntrada()
    {
        return $this->dt_entrada;
    }

    /**
     * @param mixed $dt_entrada
     * @return PessoaEntity
     */
    public function setDtEntrada($dt_entrada)
    {
        $this->dt_entrada = $dt_entrada;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNoPessoa()
    {
        return $this->no_pessoa;
    }

    /**
     * @param mixed $no_pessoa
     * @return PessoaEntity
     */
    public function setNoPessoa($no_pessoa)
    {
        $this->no_pessoa = $no_pessoa;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImPessoa()
    {
        return $this->im_pessoa;
    }

    /**
     * @param mixed $im_pessoa
     * @return PessoaEntity
     */
    public function setImPessoa($im_pessoa)
    {
        $this->im_pessoa = $im_pessoa;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtNascimento()
    {
        return $this->dt_nascimento;
    }

    /**
     * @param mixed $dt_nascimento
     * @return PessoaEntity
     */
    public function setDtNascimento($dt_nascimento)
    {
        $this->dt_nascimento = $dt_nascimento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNuTelefone()
    {
        return $this->nu_telefone;
    }

    /**
     * @param mixed $nu_telefone
     * @return PessoaEntity
     */
    public function setNuTelefone($nu_telefone)
    {
        $this->nu_telefone = $nu_telefone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNuCelular()
    {
        return $this->nu_celular;
    }

    /**
     * @param mixed $nu_celular
     * @return PessoaEntity
     */
    public function setNuCelular($nu_celular)
    {
        $this->nu_celular = $nu_celular;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNuCpfCnpj()
    {
        return $this->nu_cpf_cnpj;
    }

    /**
     * @param mixed $nu_cpf_cnpj
     * @return PessoaEntity
     */
    public function setNuCpfCnpj($nu_cpf_cnpj)
    {
        $this->nu_cpf_cnpj = $nu_cpf_cnpj;
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
     * @return PessoaEntity
     */
    public function setDeEmail($de_email)
    {
        $this->de_email = $de_email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNuRg()
    {
        return $this->nu_rg;
    }

    /**
     * @param mixed $nu_rg
     * @return PessoaEntity
     */
    public function setNuRg($nu_rg)
    {
        $this->nu_rg = $nu_rg;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNuCep()
    {
        return $this->nu_cep;
    }

    /**
     * @param mixed $nu_cep
     * @return PessoaEntity
     */
    public function setNuCep($nu_cep)
    {
        $this->nu_cep = $nu_cep;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeBairro()
    {
        return $this->de_bairro;
    }

    /**
     * @param mixed $de_bairro
     * @return PessoaEntity
     */
    public function setDeBairro($de_bairro)
    {
        $this->de_bairro = $de_bairro;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeCidade()
    {
        return $this->de_cidade;
    }

    /**
     * @param mixed $de_cidade
     * @return PessoaEntity
     */
    public function setDeCidade($de_cidade)
    {
        $this->de_cidade = $de_cidade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNuLogradouro()
    {
        return $this->nu_logradouro;
    }

    /**
     * @param mixed $nu_logradouro
     * @return PessoaEntity
     */
    public function setNuLogradouro($nu_logradouro)
    {
        $this->nu_logradouro = $nu_logradouro;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeLogradouro()
    {
        return $this->de_logradouro;
    }

    /**
     * @param mixed $de_logradouro
     * @return PessoaEntity
     */
    public function setDeLogradouro($de_logradouro)
    {
        $this->de_logradouro = $de_logradouro;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeComplemento()
    {
        return $this->de_complemento;
    }

    /**
     * @param mixed $de_complemento
     * @return PessoaEntity
     */
    public function setDeComplemento($de_complemento)
    {
        $this->de_complemento = $de_complemento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeUf()
    {
        return $this->de_uf;
    }

    /**
     * @param mixed $de_uf
     * @return PessoaEntity
     */
    public function setDeUf($de_uf)
    {
        $this->de_uf = $de_uf;
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
     * @return PessoaEntity
     */
    public function setDeObservacao($de_observacao)
    {
        $this->de_observacao = $de_observacao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdTipopessoa()
    {
        return $this->id_tipopessoa;
    }

    /**
     * @param mixed $id_tipopessoa
     * @return PessoaEntity
     */
    public function setIdTipopessoa($id_tipopessoa)
    {
        $this->id_tipopessoa = $id_tipopessoa;
        return $this;
    }
    

}
