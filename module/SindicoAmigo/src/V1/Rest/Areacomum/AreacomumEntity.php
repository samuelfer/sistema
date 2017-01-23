<?php
namespace sindicoamigo\V1\Rest\AreaComum;

/**
 *
 * Class AreaComumEntity
 * @package sindicoamigo\V1\Rest\AreaComum*
 * Classe principal é a representacao da tabela do banco de dados
 */

class AreaComumEntity
{
    protected $id_cadastro_reserva_area_comum;
    protected $id_area_pai;
    protected $id_tipo_area;
    protected $de_cadastro_reserva_area_comum;
    protected $de_materiais;
    protected $nu_valor;
    protected $hr_inicio;
    protected $hr_fim;
    protected $tmp_duracao;
    protected $st_horario_sn;
    protected $ignora_qtd_reserva;
    protected $nu_antecedencia_max;
    protected $nu_antecedencia_min;
    protected $qtd_reserva_mes;
    protected $perm_varias_reserva_dia;
    protected $qtd_reserva_mes_gratis;
    protected $qtd_reserva_ano_gratis;

    /**
     * @return mixed
     */
    public function getIdCadastroReservaAreaComum()
    {
        return $this->id_cadastro_reserva_area_comum;
    }

    /**
     * @param mixed $id_cadastro_area_comum
     * @return AreaComumEntity
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
     * @return AreaComumEntity
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
     * @return AreaComumEntity
     */
    public function setIdTipoArea($id_tipo_area)
    {
        $this->id_tipo_area = $id_tipo_area;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeCadastroReservaAreaComum()
    {
        return $this->de_cadastro_reserva_area_comum;
    }

    /**
     * @param mixed $de_cadastro_reserva_area_comum
     * @return AreaComumEntity
     */
    public function setDeCadastroReservaAreaComum($de_cadastro_reserva_area_comum)
    {
        $this->de_cadastro_reserva_area_comum = $de_cadastro_reserva_area_comum;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeMateriais()
    {
        return $this->de_materiais;
    }

    /**
     * @param mixed $de_materiais
     * @return AreaComumEntity
     */
    public function setDeMateriais($de_materiais)
    {
        $this->de_materiais = $de_materiais;
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
     * @return AreaComumEntity
     */
    public function setNuValor($nu_valor)
    {
        $this->nu_valor = $nu_valor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHrInicio()
    {
        return $this->hr_inicio;
    }

    /**
     * @param mixed $hr_inicio
     * @return AreaComumEntity
     */
    public function setHrInicio($hr_inicio)
    {
        $this->hr_inicio = $hr_inicio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHrFim()
    {
        return $this->hr_fim;
    }

    /**
     * @param mixed $hr_fim
     * @return AreaComumEntity
     */
    public function setHrFim($hr_fim)
    {
        $this->hr_fim = $hr_fim;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTmpDuracao()
    {
        return $this->tmp_duracao;
    }

    /**
     * @param mixed $tmp_duracao
     * @return AreaComumEntity
     */
    public function setTmpDuracao($tmp_duracao)
    {
        $this->tmp_duracao = $tmp_duracao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStHorarioSn()
    {
        return $this->st_horario_sn;
    }

    /**
     * @param mixed $st_horario_sn
     * @return AreaComumEntity
     */
    public function setStHorarioSn($st_horario_sn)
    {
        $this->st_horario_sn = $st_horario_sn;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIgnoraQtdReserva()
    {
        return $this->ignora_qtd_reserva;
    }

    /**
     * @param mixed $ignora_qtd_reserva
     * @return AreaComumEntity
     */
    public function setIgnoraQtdReserva($ignora_qtd_reserva)
    {
        $this->ignora_qtd_reserva = $ignora_qtd_reserva;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNuAntecedenciaMax()
    {
        return $this->nu_antecedencia_max;
    }

    /**
     * @param mixed $nu_antecedencia_max
     * @return AreaComumEntity
     */
    public function setNuAntecedenciaMax($nu_antecedencia_max)
    {
        $this->nu_antecedencia_max = $nu_antecedencia_max;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNuAntecedenciaMin()
    {
        return $this->nu_antecedencia_min;
    }

    /**
     * @param mixed $nu_antecedencia_min
     * @return AreaComumEntity
     */
    public function setNuAntecedenciaMin($nu_antecedencia_min)
    {
        $this->nu_antecedencia_min = $nu_antecedencia_min;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQtdReservaMes()
    {
        return $this->qtd_reserva_mes;
    }

    /**
     * @param mixed $qtd_reserva_mes
     * @return AreaComumEntity
     */
    public function setQtdReservaMes($qtd_reserva_mes)
    {
        $this->qtd_reserva_mes = $qtd_reserva_mes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPermVariasReservaDia()
    {
        return $this->perm_varias_reserva_dia;
    }

    /**
     * @param mixed $perm_varias_reserva_dia
     * @return AreaComumEntity
     */
    public function setPermVariasReservaDia($perm_varias_reserva_dia)
    {
        $this->perm_varias_reserva_dia = $perm_varias_reserva_dia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQtdReservaMesGratis()
    {
        return $this->qtd_reserva_mes_gratis;
    }

    /**
     * @param mixed $qtd_reserva_mes_gratis
     * @return AreaComumEntity
     */
    public function setQtdReservaMesGratis($qtd_reserva_mes_gratis)
    {
        $this->qtd_reserva_mes_gratis = $qtd_reserva_mes_gratis;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQtdReservaAnoGratis()
    {
        return $this->qtd_reserva_ano_gratis;
    }

    /**
     * @param mixed $qtd_reserva_ano_gratis
     * @return AreaComumEntity
     */
    public function setQtdReservaAnoGratis($qtd_reserva_ano_gratis)
    {
        $this->qtd_reserva_ano_gratis = $qtd_reserva_ano_gratis;
        return $this;
    }


}
