<?php
require 'vendor/autoload.php';

use \atk4\ui\Header;

$app = new \atk4\ui\App('Добро пожаловать в таблицу!');
$app->initLayout('Centered');

/*$db = new
\atk4\data\Persistence_SQL('mysql:dbname=cats;host=localhost','root','');
class cat extends \atk4\data\Model {

	public $table = 'cat';

  function init() {

  	parent::init();

  	$this->addField('name');

  	$this->addField('age');
    $this->addField('date');
  	$this->addField('date',['type'=>'date']);
    $this->addField('price',['type'=>'money']);
  }
} */
$db = new
\atk4\data\Persistence_SQL('mysql:dbname=friends;host=localhost','root','');
class Friends extends \atk4\data\Model {
  	public $table = 'friends';
function init() {
  	parent::init();
  	$this->addField('name');
    $this->addField('surname');
    $this->addField('phone_number',['default'=>371]);
    $this->addField('email');
  	$this->addField('password',['type'=>'password']);
    $this->addField('birthday',['type'=>'date']);
    $this->addField('notes', ['type'=>'text']);
}
}
$form = $app->layout->add('Form'); // создание формы
$form->setModel(new Friends($db)); // подключение формы к модели и соединение с базой данных

$form->onSubmit(function($form) { // функция срабатывающая при нажатии кнопки SAVE
	$form->model->save(); // запись всех данных в нужную таблицу
	return $form->success('Record updated'); // информация, что всё удачно записалось

});

$button = $app->layout->add(['Label', 'Хочу новое обновление!']);
$crud = $app->layout->add('CRUD');
$crud->setModel(new Friends($db));
$crud->addQuickSearch(['name','surname']);
