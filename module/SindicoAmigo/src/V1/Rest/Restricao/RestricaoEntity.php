<?php
namespace SindicoAmigo\V1\Rest\Restricao;

class RestricaoEntity
{
    protected $id_restricao;
    protected $id_area_comum;
    protected $data;

    /**
     * @return mixed
     */
    public function getIdRestricao()
    {
        return $this->id_restricao;
    }

    /**
     * @param mixed $id_restricao
     * @return RestricaoEntity
     */
    public function setIdRestricao($id_restricao)
    {
        $this->id_restricao = $id_restricao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdAreaComum()
    {
        return $this->id_area_comum;
    }

    /**
     * @param mixed $id_area_comum
     * @return RestricaoEntity
     */
    public function setIdAreaComum($id_area_comum)
    {
        $this->id_area_comum = $id_area_comum;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     * @return RestricaoEntity
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    
}
