<?php

class User
{
    private string $email;

    // getter
    public function getEmail()
    {
        return $this->email;
    }
    // setter
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
}
