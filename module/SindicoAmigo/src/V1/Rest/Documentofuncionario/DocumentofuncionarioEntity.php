<?php
namespace SindicoAmigo\V1\Rest\Documentofuncionario;

class DocumentofuncionarioEntity
{
    protected $id_funcionarios;
    protected $nu_rg;
    protected $id_orgao_expedidor;
    protected $dt_data_emissao_rg;
    protected $nu_cpf;
    protected $de_naturalidade;
    protected $nu_carteira_trabalho;
    protected $nu_serie_carteira_trabalho;
    protected $nu_pis_pasep;
    protected $nu_titulo_eleitor;
    protected $de_zona;
    protected $de_secao;
    protected $nu_reservista;
    protected $nu_habilitacao;
    protected $de_categoria_habilitacao;
    protected $dt_vencimento_habilitacao;
    protected $de_ativo_sn;
  
    function getIdFuncionarios() {
        return $this->id_funcionarios;
    }

    function getNuRg() {
        return $this->nu_rg;
    }

    function getIdOrgaoExpedidor() {
        return $this->id_orgao_expedidor;
    }

    function getDtDataEmissaoRg() {
        return $this->dt_data_emissao_rg;
    }

    function getNuCpf() {
        return $this->nu_cpf;
    }

    function getDeNaturalidade() {
        return $this->de_naturalidade;
    }

    function getNuCarteiraTrabalho() {
        return $this->nu_carteira_trabalho;
    }

    function getNuSerieCarteiraTrabalho() {
        return $this->nu_serie_carteira_trabalho;
    }

    function getNuPisPasep() {
        return $this->nu_pis_pasep;
    }

    function getNuTituloEleitor() {
        return $this->nu_titulo_eleitor;
    }

    function getDeZona() {
        return $this->de_zona;
    }

    function getDeSecao() {
        return $this->de_secao;
    }

    function getNuReservista() {
        return $this->nu_reservista;
    }

    function getNuHabilitacao() {
        return $this->nu_habilitacao;
    }

    function getDeCategoriaHabilitacao() {
        return $this->de_categoria_habilitacao;
    }

    function getDtVencimentoHabilitacao() {
        return $this->dt_vencimento_habilitacao;
    }

    function getDeAtivoSn() {
        return $this->de_ativo_sn;
    }

    function setIdFuncionarios($id_funcionarios) {
        $this->id_funcionarios = $id_funcionarios;
        return $this;
    }

    function setNuRg($nu_rg) {
        $this->nu_rg = $nu_rg;
        return $this;
    }

    function setIdOrgaoExpedidor($id_orgao_expedidor) {
        $this->id_orgao_expedidor = $id_orgao_expedidor;
        return $this;
    }

    function setDtDataEmissao_rg($dt_data_emissao_rg) {
        $this->dt_data_emissao_rg = $dt_data_emissao_rg;
        return $this;
    }

    function setNuCpf($nu_cpf) {
        $this->nu_cpf = $nu_cpf;
        return $this;
    }

    function setDeNaturalidade($de_naturalidade) {
        $this->de_naturalidade = $de_naturalidade;
        return $this;
    }

    function setNaCarteiraTrabalho($nu_carteira_trabalho) {
        $this->nu_carteira_trabalho = $nu_carteira_trabalho;
        return $this;
    }

    function setNuSerieCarteiraTrabalho($nu_serie_carteira_trabalho) {
        $this->nu_serie_carteira_trabalho = $nu_serie_carteira_trabalho;
        return $this;
    }

    function setNuPisPasep($nu_pis_pasep) {
        $this->nu_pis_pasep = $nu_pis_pasep;
        return $this;
    }

    function setNuTituloEleitor($nu_titulo_eleitor) {
        $this->nu_titulo_eleitor = $nu_titulo_eleitor;
        return $this;
    }

    function setDeZona($de_zona) {
        $this->de_zona = $de_zona;
        return $this;
    }

    function setDeSecao($de_secao) {
        $this->de_secao = $de_secao;
        return $this;
    }

    function setNuReservista($nu_reservista) {
        $this->nu_reservista = $nu_reservista;
        return $this;
    }

    function setNuHabilitacao($nu_habilitacao) {
        $this->nu_habilitacao = $nu_habilitacao;
        return $this;
    }

    function setDeCategoriaHabilitacao($de_categoria_habilitacao) {
        $this->de_categoria_habilitacao = $de_categoria_habilitacao;
        return $this;
    }

    function setDtVencimentoHabilitacao($dt_vencimento_habilitacao) {
        $this->dt_vencimento_habilitacao = $dt_vencimento_habilitacao;
        return $this;
    }

    function setDeAtivoSn($de_ativo_sn) {
        $this->de_ativo_sn = $de_ativo_sn;
        return $this;
    }


}
