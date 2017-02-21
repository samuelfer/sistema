<?php
namespace SindicoAmigo\V1\Rest\Agendacompromisso;

class AgendacompromissoEntity
{
    protected $id_agenda;
    protected $dt_cadastro;
    protected $dt_agenda;
    protected $st_notificacao;
    protected $de_responsavel;
    protected $de_titulo_tarefa;
    protected $st_status;
    protected $nu_qtde_dias;
    protected $de_acao;

    /**
     * @return mixed
     */
    public function getIdAgenda()
    {
        return $this->id_agenda;
    }

    /**
     * @param mixed $id_agenda
     * @return AgendacompromissoEntity
     */
    public function setIdAgenda($id_agenda)
    {
        $this->id_agenda = $id_agenda;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtCadastro()
    {
        return $this->dt_cadastro;
    }

    /**
     * @param mixed $dt_cadastro
     * @return AgendacompromissoEntity
     */
    public function setDtCadastro($dt_cadastro)
    {
        $this->dt_cadastro = $dt_cadastro;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtAgenda()
    {
        return $this->dt_agenda;
    }

    /**
     * @param mixed $dt_agenda
     * @return AgendacompromissoEntity
     */
    public function setDtAgenda($dt_agenda)
    {
        $this->dt_agenda = $dt_agenda;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStNotificacao()
    {
        return $this->st_notificacao;
    }

    /**
     * @param mixed $st_notificacao
     * @return AgendacompromissoEntity
     */
    public function setStNotificacao($st_notificacao)
    {
        $this->st_notificacao = $st_notificacao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeResponsavel()
    {
        return $this->de_responsavel;
    }

    /**
     * @param mixed $de_responsavel
     * @return AgendacompromissoEntity
     */
    public function setDeResponsavel($de_responsavel)
    {
        $this->de_responsavel = $de_responsavel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeTituloTarefa()
    {
        return $this->de_titulo_tarefa;
    }

    /**
     * @param mixed $de_titulo_tarefa
     * @return AgendacompromissoEntity
     */
    public function setDeTituloTarefa($de_titulo_tarefa)
    {
        $this->de_titulo_tarefa = $de_titulo_tarefa;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStStatus()
    {
        return $this->st_status;
    }

    /**
     * @param mixed $st_status
     * @return AgendacompromissoEntity
     */
    public function setStStatus($st_status)
    {
        $this->st_status = $st_status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNuQtdeDias()
    {
        return $this->nu_qtde_dias;
    }

    /**
     * @param mixed $nu_qtde_dias
     * @return AgendacompromissoEntity
     */
    public function setNuQtdeDias($nu_qtde_dias)
    {
        $this->nu_qtde_dias = $nu_qtde_dias;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeAcao()
    {
        return $this->de_acao;
    }

    /**
     * @param mixed $de_acao
     * @return AgendacompromissoEntity
     */
    public function setDeAcao($de_acao)
    {
        $this->de_acao = $de_acao;
        return $this;
    }
    
}
