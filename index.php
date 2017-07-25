<?php
/**
 * Created by PhpStorm.
 * User: sokolskih
 * Date: 21.07.2017
 * Time: 9:03
 */

require_once 'start.php';
//use Controllers\Users;
use Controllers\Questions;

//$user = Users::create_user('user1','user1@example.com','user1_pass');
$question = Questions::create_question("Have you ever met your doppelganger?",1);