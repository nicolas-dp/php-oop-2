<?php

class Utente
{
    public $is_registered;
    protected $nome;
    protected $last_name;
    protected $email;
    protected $payment;
    protected $expire_date_pay;

    function __construct(String $nome, String $last_name, String $email, String $payment, Bool $expire_date_pay, Bool $is_registered)
    {

        $this->nome = $nome;
        $this->email = $email;
        $this->payment = $payment;
        $this->expire_date_pay = $expire_date_pay;
        $this->is_registered = $is_registered;
    }

}
