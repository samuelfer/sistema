<?php
namespace SindicoAmigo\V1\Rest\Reserva;

class ReservaEntity
{
    protected $idevento;
    protected $dt_data;
    protected $dt_hora_fim;
    protected $dt_hora_inicio;
    protected $id_numero_imovel;
    protected $id_bloco;
    protected $id_cadastro_reserva_area_comum;
    protected $id_area_pai;
    protected $id_tipo_area;
    protected $nu_valor;
    protected $de_observacao;
    protected $status;
    protected $login;
    protected $dt_hr_solicitacao;
    protected $st_termo;

    /**
     * @return mixed
     */
    public function getIdevento()
    {
        return $this->idevento;
    }

    /**
     * @param mixed $idevento
     * @return ReservaEntity
     */
    public function setIdevento($idevento)
    {
        $this->idevento = $idevento;
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
     * @return ReservaEntity
     */
    public function setDtData($dt_data)
    {
        $this->dt_data = $dt_data;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtHoraFim()
    {
        return $this->dt_hora_fim;
    }

    /**
     * @param mixed $dt_hora_fim
     * @return ReservaEntity
     */
    public function setDtHoraFim($dt_hora_fim)
    {
        $this->dt_hora_fim = $dt_hora_fim;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtHoraInicio()
    {
        return $this->dt_hora_inicio;
    }

    /**
     * @param mixed $dt_hora_inicio
     * @return ReservaEntity
     */
    public function setDtHoraInicio($dt_hora_inicio)
    {
        $this->dt_hora_inicio = $dt_hora_inicio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdNumeroImovel()
    {
        return $this->id_numero_imovel;
    }

    /**
     * @param mixed $id_numero_imovel
     * @return ReservaEntity
     */
    public function setIdNumeroImovel($id_numero_imovel)
    {
        $this->id_numero_imovel = $id_numero_imovel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdBloco()
    {
        return $this->id_bloco;
    }

    /**
     * @param mixed $id_bloco
     * @return ReservaEntity
     */
    public function setIdBloco($id_bloco)
    {
        $this->id_bloco = $id_bloco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdCadastroReservaAreaComum()
    {
        return $this->id_cadastro_reserva_area_comum;
    }

    /**
     * @param mixed $id_cadastro_reserva_area_comum
     * @return ReservaEntity
     */
    public function setIdCadastroReservaAreaComum($id_cadastro_reserva_area_comum)
    {
        $this->id_cadastro_reserva_area_comum = $id_cadastro_reserva_area_comum;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdAreaPai()
    {
        return $this->id_area_pai;
    }

    /**
     * @param mixed $id_area_pai
     * @return ReservaEntity
     */
    public function setIdAreaPai($id_area_pai)
    {
        $this->id_area_pai = $id_area_pai;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdTipoArea()
    {
        return $this->id_tipo_area;
    }

    /**
     * @param mixed $id_tipo_area
     * @return ReservaEntity
     */
    public function setIdTipoArea($id_tipo_area)
    {
        $this->id_tipo_area = $id_tipo_area;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNuValor()
    {
        return $this->nu_valor;
    }

    /**
     * @param mixed $nu_valor
     * @return ReservaEntity
     */
    public function setNuValor($nu_valor)
    {
        $this->nu_valor = $nu_valor;
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
     * @return ReservaEntity
     */
    public function setDeObservacao($de_observacao)
    {
        $this->de_observacao = $de_observacao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return ReservaEntity
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     * @return ReservaEntity
     */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtHrSolicitacao()
    {
        return $this->dt_hr_solicitacao;
    }

    /**
     * @param mixed $dt_hr_solicitacao
     * @return ReservaEntity
     */
    public function setDtHrSolicitacao($dt_hr_solicitacao)
    {
        $this->dt_hr_solicitacao = $dt_hr_solicitacao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStTermo()
    {
        return $this->st_termo;
    }

    /**
     * @param mixed $st_termo
     * @return ReservaEntity
     */
    public function setStTermo($st_termo)
    {
        $this->st_termo = $st_termo;
        return $this;
    }
    
}
