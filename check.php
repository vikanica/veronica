<?php
require 'connection.php';
$app = new \atk4\ui\App('Добро пожаловать в АД! А если застрелитесь, я вас не остановлю.');

$app->initLayout('Centered');

$check = new\atk4\data\Model(new \atk4\data\Persistence_Array($a));
$check->addfield('Password');
