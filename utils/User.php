<?php

namespace Utils;

class User
{
    public $username;
    public $email;
    public $password;

    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email    = $email;
        $this->password = $password;
    }

    public function getProfile($validator)
    {
        echo "User    : " . $this->username    . " — " .$validator->validateUsername($this->username) . "<br>";
        echo "Email    : " . $this->email    . " — " . $validator->validateEmail($this->email)       . "<br>";
        echo "Password : " . $this->password . " — " . $validator->validatePassword($this->password) . "<br>";
    }
}

?>