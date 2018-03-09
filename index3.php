
<?php
require 'vendor/autoload.php';
require 'app.php';

use \atk4\ui\Header;

$app = new App('public');

/* $db = new
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
\atk4\data\Persistence_SQL('mysql:dbname=main_db;host=localhost','root','');
class Friends extends \atk4\data\Model {
  	public $table = 'friends';
function init() {
  	parent::init();
  	$this->addField('name');
    $this->addField('surname');
    $this->addField('phone_number',['default'=>371]);
    $this->addField('email');
  	//$this->addField('password',['type'=>'password']);
    $this->addField('birthday',['type'=>'date']);
    $this->addField('notes', ['type'=>'text']);
}
}
$form = $app->layout->add('Form'); // создание формы
$form->setModel(new Friends($db)); // подключение формы к модели и соединение с базой данных
session_start();


$form->onSubmit(function($form) { // функция срабатывающая при нажатии кнопки SAVE
	$form->model->save(); // запись всех данных в нужную таблицу

  //return $form->success('Record updated'); // информация, что всё удачно записалось
  $_SESSION['name'] = $form->model['name'];
  $_SESSION['surname']= $form->model['surname'];
  $_SESSION['phone_number'] = $form->model['phone_number'];
  $_SESSION['notes'] = $form->model['notes'];
  $_SESSION['email'] = $form->model['email'];
  return new \atk4\ui\jsExpression('document.location = "task.php" ');
});

$button = $app->layout->add(['Label', 'Хочу новое обновление!']);
$crud = $app->layout->add('CRUD');
$crud->setModel(new Friends($db));
$crud->addQuickSearch(['name','surname']);
/*$a = [];

    $m_register = new \atk4\data\Model(new \atk4\data\Persistence_Array($a));

    $m_register->addField('name');



    $f = $app->add(new \atk4\ui\Form(['segment'=>TRUE]));

    $f->setModel($m_register);



	 $f->onSubmit(function ($f) {

        if ($f->model['name'] == '') {

            return $f->error('name', "You have to fill this place.");

        } else {

			$s = $f->model['name'];


			$_SESSION['name'] = $f->model['name'];

			return new \atk4\ui\jsExpression('document.location = "task.php" ');



		}

    });
    session_start();*/
