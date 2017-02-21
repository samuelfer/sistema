<?php
namespace SindicoAmigo\V1\Rest\Imagem;

class ImagemEntity
{
    protected $id_imagem;
    protected $id_anuncio;
    protected $img;
    protected $de_legenda;

    /**
     * @return mixed
     */
    public function getIdImagem()
    {
        return $this->id_imagem;
    }

    /**
     * @param mixed $id_imagem
     * @return ImagemEntity
     */
    public function setIdImagem($id_imagem)
    {
        $this->id_imagem = $id_imagem;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdAnuncio()
    {
        return $this->id_anuncio;
    }

    /**
     * @param mixed $id_anuncio
     * @return ImagemEntity
     */
    public function setIdAnuncio($id_anuncio)
    {
        $this->id_anuncio = $id_anuncio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     * @return ImagemEntity
     */
    public function setImg($img)
    {
        $this->img = $img;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeLegenda()
    {
        return $this->de_legenda;
    }

    /**
     * @param mixed $de_legenda
     * @return ImagemEntity
     */
    public function setDeLegenda($de_legenda)
    {
        $this->de_legenda = $de_legenda;
        return $this;
    }

    
}
