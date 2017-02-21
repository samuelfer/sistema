<?php
namespace SindicoAmigo\V1\Rest\Segusers;

class SegusersEntity
{
    protected $login;
    protected $pswd;
    protected $name;
    protected $email;
    protected $email_alt;
    protected $telefone;
    protected $telefone_alt;
    protected $recebe_sms;
    protected $active;
    protected $activation_code;
    protected $priv_admin;
    protected $recebe_email;
    
    function getLogin() {
        return $this->login;
    }

    function getPswd() {
        return $this->pswd;
    }

    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getEmailAlt() {
        return $this->email_alt;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getTelefoneAlt() {
        return $this->telefone_alt;
    }

    function getRecebeSms() {
        return $this->recebe_sms;
    }

    function getActive() {
        return $this->active;
    }

    function getActivationCode() {
        return $this->activation_code;
    }

    function getPrivAdmin() {
        return $this->priv_admin;
    }

    function getRecebeEmail() {
        return $this->recebe_email;
    }

    function setLogin($login) {
        $this->login = $login;
        return $this;
    }

    function setPswd($pswd) {
        $this->pswd = $pswd;
        return $this;
    }

    function setName($name) {
        $this->name = $name;
        return $this;
    }

    function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    function setEmailAlt($email_alt) {
        $this->email_alt = $email_alt;
        return $this;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
        return $this;
    }

    function setTelefoneAlt($telefone_alt) {
        $this->telefone_alt = $telefone_alt;
        return $this;
    }

    function setRecebeSms($recebe_sms) {
        $this->recebe_sms = $recebe_sms;
        return $this;
    }

    function setActive($active) {
        $this->active = $active;
        return $this;
    }

    function setActivationCode($activation_code) {
        $this->activation_code = $activation_code;
        return $this;
    }

    function setPrivAdmin($priv_admin) {
        $this->priv_admin = $priv_admin;
        return $this;
    }

    function setRecebeEmail($recebe_email) {
        $this->recebe_email = $recebe_email;
        return $this;
    }


    
}
