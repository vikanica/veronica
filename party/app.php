<?php
class App extends \atk4\ui\App {
      public $db;
      public $sms;
      function __construct($mode) {
          parent::__construct('Party');
          if ($mode == 'public') {
              $this->initLayout('Centered');
              $this->layout->template->del('Header');
              $logo = 'party.jpg';
              $this->layout->add(['Image',$logo,'medium centered'],'Header');
              $this->layout->add([
                  'Header',
                  'Party',
                  'size'=>'huge',
                  'aligned' => 'center',
              ], 'Header');
          }elseif($mode == 'admin') {
              $this->initLayout('Admin');
              $this->layout->leftMenu->addItem(['Main page', 'icon'=>'home'], ['index']);
              $this->layout->leftMenu->addItem(['Peoples', 'icon'=>'book'], ['admin','check'=>'lessens']);
              $this->layout->leftMenu->addItem(['Skolotaji', 'icon'=>'users'], ['admin','check'=>'teachers']);
              $this->layout->leftMenu->addItem(['Ieraksti', 'icon'=>'unordered list'], ['admin','check'=>'list']);
          }

              $this->db = \atk4\data\Persistence::connect('mysql:host=127.0.0.1;dbname=main_db;charset=utf8', 'root', '');
  }
  }
