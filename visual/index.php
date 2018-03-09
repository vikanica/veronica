<?php
require '../vendor/autoload.php';
use \atk4\ui\Header;
$app = new \atk4\ui\App('.');
$app->initLayout('Centered');
$app->layout->template->del('Header');
$logo = 'devils.jpg';
$app->layout->add(['Image',$logo,'medium centered'],'Header');
$app->layout->add([
  'Header',
  'Demonic trap',
  'size'=>'medium',
  'aligned'=>'center'
],'Header');
