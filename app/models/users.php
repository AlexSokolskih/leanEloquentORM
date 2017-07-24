<?php
/**
 * Created by PhpStorm.
 * User: sokolskih
 * Date: 24.07.2017
 * Time: 15:53
 */

namespace Models;
use \Illuminate\Database\Eloquent\Model;


class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['username', 'email', 'pass'];
}