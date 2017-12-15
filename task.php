<<<<<<< HEAD

<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Добро пожаловать в никуда!');
$app->initLayout('Centered');
session_start();
$name=$_SESSION['name'];
$surname=$_SESSION['surname'];
$phone_number=$_SESSION['phone_number'];
$notes=$_SESSION['notes'];
$email=$_SESSION['email'];
$label = $app->layout->add(['label', "Hello: ".$name.' '. $surname]);
$label = $app->layout->add(['label', "Your phone number: ".$phone_number]);
$label = $app->layout->add(['label', "Your notes: ". $notes]);
$label = $app->layout->add(['label', "Your email: ". $email]);
=======

<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Добро пожаловать в никуда!');
$app->initLayout('Centered');
session_start();
$name=$_SESSION['name'];
$surname=$_SESSION['surname'];
$phone_number=$_SESSION['phone_number'];
$notes=$_SESSION['notes'];
$email=$_SESSION['email'];
$label = $app->layout->add(['label', "Hello: ".$name.' '. $surname]);
$label = $app->layout->add(['label', "Your phone number: ".$phone_number]);
$label = $app->layout->add(['label', "Your notes: ". $notes]);
$label = $app->layout->add(['label', "Your email: ". $email]);
>>>>>>> 94d40132e5de5ea5964408bb6727f2dd1084405c
