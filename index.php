<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Какая То Теорема');

$app->initLayout('Centered');
//$form = $app->layout->add('Form');
$check = new \atk4\data\Model(new \atk4\data\Persistence_Array($a));
$check->addField('a');
$check->addField('b');
