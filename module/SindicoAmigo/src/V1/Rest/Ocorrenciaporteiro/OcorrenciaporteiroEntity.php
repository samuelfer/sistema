<?php
namespace SindicoAmigo\V1\Rest\Ocorrenciaporteiro;

class OcorrenciaporteiroEntity
{
    protected $id_ocorrencia_porteiro;
    protected $dt_ocorrencia_porteiro;
    protected $hr_ocorrencia_porteiro;
    protected $de_ocorrencia_porteiro;
    protected $login;

    /**
     * @return mixed
     */
    public function getIdOcorrenciaPorteiro()
    {
        return $this->id_ocorrencia_porteiro;
    }

    /**
     * @param mixed $id_ocorrencia_porteiro
     * @return OcorrenciaporteiroEntity
     */
    public function setIdOcorrenciaPorteiro($id_ocorrencia_porteiro)
    {
        $this->id_ocorrencia_porteiro = $id_ocorrencia_porteiro;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtOcorrenciaPorteiro()
    {
        return $this->dt_ocorrencia_porteiro;
    }

    /**
     * @param mixed $dt_ocorrencia_porteiro
     * @return OcorrenciaporteiroEntity
     */
    public function setDtOcorrenciaPorteiro($dt_ocorrencia_porteiro)
    {
        $this->dt_ocorrencia_porteiro = $dt_ocorrencia_porteiro;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHrOcorrenciaPorteiro()
    {
        return $this->hr_ocorrencia_porteiro;
    }

    /**
     * @param mixed $hr_ocorrencia_porteiro
     * @return OcorrenciaporteiroEntity
     */
    public function setHrOcorrenciaPorteiro($hr_ocorrencia_porteiro)
    {
        $this->hr_ocorrencia_porteiro = $hr_ocorrencia_porteiro;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeOcorrenciaPorteiro()
    {
        return $this->de_ocorrencia_porteiro;
    }

    /**
     * @param mixed $de_ocorrencia_porteiro
     * @return OcorrenciaporteiroEntity
     */
    public function setDeOcorrenciaPorteiro($de_ocorrencia_porteiro)
    {
        $this->de_ocorrencia_porteiro = $de_ocorrencia_porteiro;
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
     * @return OcorrenciaporteiroEntity
     */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

}
