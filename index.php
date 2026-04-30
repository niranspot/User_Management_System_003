<?php

require_once 'utils/User.php';
require_once 'utils/Validator.php';
include_once 'utils/helpers.php';

use Utils\User;
use Utils\Validator as UserValidator;

// Load users array from data/users.php
$usersData = require 'data/users.php';

// Create one Validator object (reused for all users)
$validator = new UserValidator();

// Loop through each user
foreach ($usersData as $userData) {

    // Create a User object using the constructor
    $user = new User($userData['username'], $userData['email'], $userData['password']);

    
    Utils\printSeparator();

    $user->getProfile($validator);
}

?>