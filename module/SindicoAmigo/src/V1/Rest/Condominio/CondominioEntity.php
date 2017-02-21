<?php
namespace SindicoAmigo\V1\Rest\Condominio;

//Classe que representa a tabela da base de dados
class CondominioEntity
{
    protected $id_condominio;
    protected $no_condominio;
    protected $img_logo;
    protected $nu_cpnj_cnpf;
    protected $email_condominio;
    protected $nu_cep_cond;
    protected $de_logradouro_cond;
    protected $de_complemento_cond;
    protected $nu_numero_cond;
    protected $de_bairro_cond;
    protected $de_cidade_cond;
    protected $de_uf_cond;
    protected $de_obs_cond;
    protected $endereco_site;
    protected $id_administradora;//Quem administra o condominio

    /**
     * @return mixed
     */
    public function getIdCondominio()
    {
        return $this->id_condominio;
    }

    /**
     * @param mixed $id_condominio
     * @return CondominioEntity
     */
    public function setIdCondominio($id_condominio)
    {
        $this->id_condominio = $id_condominio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNoCondominio()
    {
        return $this->no_condominio;
    }

    /**
     * @param mixed $no_condominio
     * @return CondominioEntity
     */
    public function setNoCondominio($no_condominio)
    {
        $this->no_condominio = $no_condominio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImgLogo()
    {
        return $this->img_logo;
    }

    /**
     * @param mixed $img_logo
     * @return CondominioEntity
     */
    public function setImgLogo($img_logo)
    {
        $this->img_logo = $img_logo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNuCpnjCnpf()
    {
        return $this->nu_cpnj_cnpf;
    }

    /**
     * @param mixed $nu_cpnj_cnpf
     * @return CondominioEntity
     */
    public function setNuCpnjCnpf($nu_cpnj_cnpf)
    {
        $this->nu_cpnj_cnpf = $nu_cpnj_cnpf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailCondominio()
    {
        return $this->email_condominio;
    }

    /**
     * @param mixed $email_condominio
     * @return CondominioEntity
     */
    public function setEmailCondominio($email_condominio)
    {
        $this->email_condominio = $email_condominio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNuCepCond()
    {
        return $this->nu_cep_cond;
    }

    /**
     * @param mixed $nu_cep_cond
     * @return CondominioEntity
     */
    public function setNuCepCond($nu_cep_cond)
    {
        $this->nu_cep_cond = $nu_cep_cond;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeLogradouroCond()
    {
        return $this->de_logradouro_cond;
    }

    /**
     * @param mixed $de_logradouro_cond
     * @return CondominioEntity
     */
    public function setDeLogradouroCond($de_logradouro_cond)
    {
        $this->de_logradouro_cond = $de_logradouro_cond;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeComplementoCond()
    {
        return $this->de_complemento_cond;
    }

    /**
     * @param mixed $de_complemento_cond
     * @return CondominioEntity
     */
    public function setDeComplementoCond($de_complemento_cond)
    {
        $this->de_complemento_cond = $de_complemento_cond;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNuNumeroCond()
    {
        return $this->nu_numero_cond;
    }

    /**
     * @param mixed $nu_numero_cond
     * @return CondominioEntity
     */
    public function setNuNumeroCond($nu_numero_cond)
    {
        $this->nu_numero_cond = $nu_numero_cond;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeBairroCond()
    {
        return $this->de_bairro_cond;
    }

    /**
     * @param mixed $de_bairro_cond
     * @return CondominioEntity
     */
    public function setDeBairroCond($de_bairro_cond)
    {
        $this->de_bairro_cond = $de_bairro_cond;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeCidadeCond()
    {
        return $this->de_cidade_cond;
    }

    /**
     * @param mixed $de_cidade_cond
     * @return CondominioEntity
     */
    public function setDeCidadeCond($de_cidade_cond)
    {
        $this->de_cidade_cond = $de_cidade_cond;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeUfCond()
    {
        return $this->de_uf_cond;
    }

    /**
     * @param mixed $de_uf_cond
     * @return CondominioEntity
     */
    public function setDeUfCond($de_uf_cond)
    {
        $this->de_uf_cond = $de_uf_cond;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeObsCond()
    {
        return $this->de_obs_cond;
    }

    /**
     * @param mixed $de_obs_cond
     * @return CondominioEntity
     */
    public function setDeObsCond($de_obs_cond)
    {
        $this->de_obs_cond = $de_obs_cond;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEnderecoSite()
    {
        return $this->endereco_site;
    }

    /**
     * @param mixed $endereco_site
     * @return CondominioEntity
     */
    public function setEnderecoSite($endereco_site)
    {
        $this->endereco_site = $endereco_site;
        return $this;
    }


}
