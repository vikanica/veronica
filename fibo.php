<?php
require 'vendor/autoload.php';

use \atk4\ui\Header;

$app = new \atk4\ui\App('Добро пожаловать в таблицу!');
$app->initLayout('Centered');
session_start();
if(isset($_SESSION['a'])){
$_SESSION['n']=1;
}else{
$m=$_SESSION['a']+$_SESSION['n'];
$_SESSION['a']=$_SESSION['n'];
$_SESSION['n']=$m;
}



$label = $app->layout->add(['Label', $m);
$button_inc = $app->add(['Button','+']);
$button_inc->link(['index']);
$button_res = $app->add(['Button','+']);
$button_res->link(['index']);
