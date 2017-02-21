<?php
namespace SindicoAmigo\V1\Rest\Faleconosco;

class FaleconoscoEntity
{
    protected $id_fale_conosco;
    protected $dt_mensagem;
    protected $id_bloco;
    protected $id_numero_imovel;
    protected $email;
    protected $id_tipo_mensagem;
    protected $de_mensagem;
    protected $st_visto;
    protected $feedback;
    protected $telefone;
    protected $st_ticket;
    protected $dt_ultima_mensagem;
    

    /**
     * @return mixed
     */
    public function getIdFaleConosco()
    {
        return $this->id_fale_conosco;
    }

    /**
     * @param mixed $id_fale_conosco
     * @return FaleconoscoEntity
     */
    public function setIdFaleConosco($id_fale_conosco)
    {
        $this->id_fale_conosco = $id_fale_conosco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtMensagem()
    {
        return $this->dt_mensagem;
    }

    /**
     * @param mixed $dt_mensagem
     * @return FaleconoscoEntity
     */
    public function setDtMensagem($dt_mensagem)
    {
        $this->dt_mensagem = $dt_mensagem;
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
     * @return FaleconoscoEntity
     */
    public function setIdBloco($id_bloco)
    {
        $this->id_bloco = $id_bloco;
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
     * @return FaleconoscoEntity
     */
    public function setIdNumeroImovel($id_numero_imovel)
    {
        $this->id_numero_imovel = $id_numero_imovel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return FaleconoscoEntity
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdTipoMensagem()
    {
        return $this->id_tipo_mensagem;
    }

    /**
     * @param mixed $id_tipo_mensagem
     * @return FaleconoscoEntity
     */
    public function setIdTipoMensagem($id_tipo_mensagem)
    {
        $this->id_tipo_mensagem = $id_tipo_mensagem;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeMensagem()
    {
        return $this->de_mensagem;
    }

    /**
     * @param mixed $de_mensagem
     * @return FaleconoscoEntity
     */
    public function setDeMensagem($de_mensagem)
    {
        $this->de_mensagem = $de_mensagem;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStVisto()
    {
        return $this->st_visto;
    }

    /**
     * @param mixed $st_visto
     * @return FaleconoscoEntity
     */
    public function setStVisto($st_visto)
    {
        $this->st_visto = $st_visto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * @param mixed $feedback
     * @return FaleconoscoEntity
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     * @return FaleconoscoEntity
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStTicket()
    {
        return $this->st_ticket;
    }

    /**
     * @param mixed $st_ticket
     * @return FaleconoscoEntity
     */
    public function setStTicket($st_ticket)
    {
        $this->st_ticket = $st_ticket;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtUltimaMensagem()
    {
        return $this->dt_ultima_mensagem;
    }

    /**
     * @param mixed $dt_ultima_mensagem
     * @return FaleconoscoEntity
     */
    public function setDtUltimaMensagem($dt_ultima_mensagem)
    {
        $this->dt_ultima_mensagem = $dt_ultima_mensagem;
        return $this;
    }
    
}
