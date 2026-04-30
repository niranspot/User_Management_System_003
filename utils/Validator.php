<?php

namespace Utils;

class Validator
{
    public function validateUsername($username)
    {
        if (strlen($username) >= 3) {
            return "Username is valid";
        }
        return "Username is invalid (too short)";
    }

    public function validateEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Email is valid";
        }
        return "Email is invalid";
    }

    public function validatePassword($password)
{

    if (strlen($password) < 6) {
        return "Password is invalid (min 6 characters)";
    }

    if (!preg_match('/[0-9]/', $password)) {
        return "Password is invalid (must contain a number)";
    }

    if (!preg_match('/[a-zA-Z]/', $password)) {
        return "Password is invalid (must contain a letter)";
    }

    if (!preg_match('/[!@#$%^&*]/', $password)) {
        return "Password is invalid (must contain a special character)";
    }

    return "Password is valid";
}
}
