<?php
/**
 * Created by PhpStorm.
 * User: sokolskih
 * Date: 24.07.2017
 * Time: 15:56
 */

namespace Controllers;
use \Models\User;

class Users
{
    public static function create_user($username, $email, $password){
       $user = User::create(['username'=>$username,'email'=>$email,'password'=>$password]);
        return $user;
    }
}