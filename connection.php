<?php
require 'vendor/autoload.php';
$db = new

\atk4\data\Persistence_SQL('mysql:dbname=party;host=localhost','root','');
class Friend extends \atk4\data\Model {

  	public $table = 'party';

function init() {

  	parent::init();
    $this->addField('name',['required'=>true,'caption'=>'Имя']);

        $this->addField('surname',['required'=>true,'caption'=>'Фамилия']);

        $this->addField('phone_number',['default'=>'+371','caption'=>'Номер телефона']);

        $this->addField('age',['required'=>true,'caption'=>'Возраст']);
      }
    };
