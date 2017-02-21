<?php
namespace SindicoAmigo\V1\Rest\Anuncio;

class AnuncioEntity
{
    protected $id_anuncio;
    protected $dt_anuncio;
    protected $hr_anuncio;
    protected $de_categoria;
    protected $de_titulo_anuncio;
    protected $de_anuncio;
    protected $imagem;
    protected $login;
    protected $nu_telefone;
    protected $vl_anuncio;

    /**
     * @return mixed
     */
    public function getIdAnuncio()
    {
        return $this->id_anuncio;
    }

    /**
     * @param mixed $id_anuncio
     * @return AnuncioEntity
     */
    public function setIdAnuncio($id_anuncio)
    {
        $this->id_anuncio = $id_anuncio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtAnuncio()
    {
        return $this->dt_anuncio;
    }

    /**
     * @param mixed $dt_anuncio
     * @return AnuncioEntity
     */
    public function setDtAnuncio($dt_anuncio)
    {
        $this->dt_anuncio = $dt_anuncio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHrAnuncio()
    {
        return $this->hr_anuncio;
    }

    /**
     * @param mixed $hr_anuncio
     * @return AnuncioEntity
     */
    public function setHrAnuncio($hr_anuncio)
    {
        $this->hr_anuncio = $hr_anuncio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeCategoria()
    {
        return $this->de_categoria;
    }

    /**
     * @param mixed $de_categoria
     * @return AnuncioEntity
     */
    public function setDeCategoria($de_categoria)
    {
        $this->de_categoria = $de_categoria;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeTituloAnuncio()
    {
        return $this->de_titulo_anuncio;
    }

    /**
     * @param mixed $de_titulo_anuncio
     * @return AnuncioEntity
     */
    public function setDeTituloAnuncio($de_titulo_anuncio)
    {
        $this->de_titulo_anuncio = $de_titulo_anuncio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeAnuncio()
    {
        return $this->de_anuncio;
    }

    /**
     * @param mixed $de_anuncio
     * @return AnuncioEntity
     */
    public function setDeAnuncio($de_anuncio)
    {
        $this->de_anuncio = $de_anuncio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * @param mixed $imagem
     * @return AnuncioEntity
     */
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     * @return AnuncioEntity
     */
    public function setLogin($login)
    {
        $this->login = $login;
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
     * @return AnuncioEntity
     */
    public function setNuTelefone($nu_telefone)
    {
        $this->nu_telefone = $nu_telefone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVlAnuncio()
    {
        return $this->vl_anuncio;
    }

    /**
     * @param mixed $vl_anuncio
     * @return AnuncioEntity
     */
    public function setVlAnuncio($vl_anuncio)
    {
        $this->vl_anuncio = $vl_anuncio;
        return $this;
    }

    
}
