<?php

//database and other important constant variable information

error_reporting(E_ALL);
ini_set('display_errors','On');
require_once('app/classes/autoload.php');
spl_autoload_register('autoload::load');

$dbName = '';
$dbPass = '';
$dbUser = '';
$dbHost = '';
$mainEmail = 'maravillamatthew@gmail.com';

?>