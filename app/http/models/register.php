<?php

namespace Lamantin\App\http\models;

use Lamantin\App\http\models\tables\Users;

class register
{
    public function register($username, $email, $password)
    {
        $token = md5($email . $password . time());
        if(Users::create(['username' => $username, 'token' => $token, 'email' => $email, 'password' => $password])) {
            setcookie('t', $token, time() + 1296000);
            header('Location: /home');
        }
    }
}