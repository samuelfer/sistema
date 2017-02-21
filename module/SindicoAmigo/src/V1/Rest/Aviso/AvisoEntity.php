<?php
namespace SindicoAmigo\V1\Rest\Aviso;

class AvisoEntity
{
    protected $id_aviso;
    protected $dt_data_aviso;
    protected $de_aviso;
    protected $arq_aviso;

    /**
     * @return mixed
     */
    public function getIdAviso()
    {
        return $this->id_aviso;
    }

    /**
     * @param mixed $id_aviso
     * @return AvisoEntity
     */
    public function setIdAviso($id_aviso)
    {
        $this->id_aviso = $id_aviso;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtDataAviso()
    {
        return $this->dt_data_aviso;
    }

    /**
     * @param mixed $dt_data_aviso
     * @return AvisoEntity
     */
    public function setDtDataAviso($dt_data_aviso)
    {
        $this->dt_data_aviso = $dt_data_aviso;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeAviso()
    {
        return $this->de_aviso;
    }

    /**
     * @param mixed $de_aviso
     * @return AvisoEntity
     */
    public function setDeAviso($de_aviso)
    {
        $this->de_aviso = $de_aviso;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getArqAviso()
    {
        return $this->arq_aviso;
    }

    /**
     * @param mixed $arq_aviso
     * @return AvisoEntity
     */
    public function setArqAviso($arq_aviso)
    {
        $this->arq_aviso = $arq_aviso;
        return $this;
    }
    
}
