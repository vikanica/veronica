<?php
require 'connection.php';
$app = new \atk4\ui\App('Добро пожаловать в АД! А если застрелитесь, я вас не остановлю.');

$app->initLayout('Centered');
$form = $app->layout->add('Form');

$form->setModel(new Friend($db));
$form->onSubmit(function($form) {

	$form->model->save();

  return new \atk4\ui\jsExpression('document.location = "index.php" ');

});
$app->add(['ui'=>'divider']);
$crud = $app->layout->add('Grid');

$crud->setModel(new Friend($db));

$crud->addQuickSearch(['name','surname','phone number','age']);

$button = $app->layout->add(['Button', "admin",'white inverted','iconRight'=>'coffee']);
$button->link(['check']);
