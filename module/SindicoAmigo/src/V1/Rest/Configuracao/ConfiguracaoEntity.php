<?php
namespace SindicoAmigo\V1\Rest\Configuracao;

class ConfiguracaoEntity
{
    protected $id_configuracao;
    protected $nu_dia_antecedencia;
    protected $qtd_reserva_mes;
    protected $perm_varias_reserva_dia;

    /**
     * @return mixed
     */
    public function getIdConfiguracao()
    {
        return $this->id_configuracao;
    }

    /**
     * @param mixed $id_configuracao
     * @return ConfiguracaoEntity
     */
    public function setIdConfiguracao($id_configuracao)
    {
        $this->id_configuracao = $id_configuracao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNuDiaAntecedencia()
    {
        return $this->nu_dia_antecedencia;
    }

    /**
     * @param mixed $nu_dia_antecedencia
     * @return ConfiguracaoEntity
     */
    public function setNuDiaAntecedencia($nu_dia_antecedencia)
    {
        $this->nu_dia_antecedencia = $nu_dia_antecedencia;
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
     * @return ConfiguracaoEntity
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
     * @return ConfiguracaoEntity
     */
    public function setPermVariasReservaDia($perm_varias_reserva_dia)
    {
        $this->perm_varias_reserva_dia = $perm_varias_reserva_dia;
        return $this;
    }
    
}
