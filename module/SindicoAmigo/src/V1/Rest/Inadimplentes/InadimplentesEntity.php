<?php
namespace SindicoAmigo\V1\Rest\Inadimplentes;

class InadimplentesEntity
{
    protected $usuario;
    protected $st_inadimplente;

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     * @return InadimplentesEntity
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStInadimplente()
    {
        return $this->st_inadimplente;
    }

    /**
     * @param mixed $st_inadimplente
     * @return InadimplentesEntity
     */
    public function setStInadimplente($st_inadimplente)
    {
        $this->st_inadimplente = $st_inadimplente;
        return $this;
    }
    
}
