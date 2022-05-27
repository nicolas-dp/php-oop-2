<?php

class Utente
{
    
    protected $nome;
    protected $email;
    protected $payment;
    protected $expire_date_pay;
    public $is_registered;
    protected $age;

    function __construct(String $nome, String $email, String $payment, Bool $expire_date_pay, Bool $is_registered, Int $age)
    {

        $this->nome = $nome;
        $this->email = $email;
        $this->payment = $payment;
        $this->expire_date_pay = $expire_date_pay;
        $this->is_registered = $is_registered;
        $this->age = $age;
    }

}
