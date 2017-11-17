<?php
require 'vendor/autoload.php';

use \atk4\ui\Header;

$app = new \atk4\ui\App('Добро пожаловать в игру!');
$app->initLayout('Centered');

$db = new
\atk4\data\Persistence_SQL('mysql:dbname=cats;host=127.0.0.1','root','root');
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
}
$db = new
\atk4\data\Persistence_SQL('mysql:dbname=friends;host=localhost','root');
class Friends extends \atk4\data\Model {
	public $table = 'friends';
	function init() {
		parent::init();
		$this->addField('name');
		$this->addField('surname');
		$this->addField('phone_number',['default'=>'+371']);
		$this->addField('nickname');
		$this->addField('password',['type'=>'password']);
		$this->addField('birthdate',['type'=>'date']);
		$this->addField('notes',['type'=>'text']);
	}
}
$form = $app->layout->('Form');
$form->setModel(new Friend($db));
$form->onSubmit(funktion($form) {
$form->model->save();
return $form->success('Record updated');
});
