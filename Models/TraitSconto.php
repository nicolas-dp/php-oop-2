<?php

trait Sconto
{

    public function getSconto(Utente $user)
    {

        if ($user->is_registered) {
            $this->prezzo = $this->prezzo - ($this->prezzo * 20) / 100;
            return $this->prezzo;
        } else {
            return $this->prezzo;
        }
    }
}
