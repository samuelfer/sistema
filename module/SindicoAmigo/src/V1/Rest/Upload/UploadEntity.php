<?php
namespace SindicoAmigo\V1\Rest\Upload;

class UploadEntity
{
    protected $id_upload;
    protected $dt_upload;
    protected $id_tipo_upload;
    protected $arquivo;
    protected $de_descricao;
    protected $permissao;
    
    function getIdUpload() {
        return $this->id_upload;
    }

    function getDtUpload() {
        return $this->dt_upload;
    }

    function getIdTipoUpload() {
        return $this->id_tipo_upload;
    }

    function getArquivo() {
        return $this->arquivo;
    }

    function getDeDescricao() {
        return $this->de_descricao;
    }

    function getPermissao() {
        return $this->permissao;
    }

    function setIdUpload($id_upload) {
        $this->id_upload = $id_upload;
        return $this;
    }

    function setDtUpload($dt_upload) {
        $this->dt_upload = $dt_upload;
        return $this;
    }

    function setIdTipo_upload($id_tipo_upload) {
        $this->id_tipo_upload = $id_tipo_upload;
        return $this;
    }

    function setArquivo($arquivo) {
        $this->arquivo = $arquivo;
        return $this;
    }

    function setDeDescricao($de_descricao) {
        $this->de_descricao = $de_descricao;
        return $this;
    }

    function setPermissao($permissao) {
        $this->permissao = $permissao;
        return $this;
    }


}
