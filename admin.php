<?php
require 'connection.php';
$app = new \atk4\ui\App('Travel');
$app->initLayout('Admin');
require 'visual.php';
$place=new Place($db);
$place->setOrder('name');
$grid=$app->add('Grid');
$grid=setModel($place);
$grid->addQuickSearch(['name']);
$garid->addDecorator('name', new\atk4\ui\TableColumn\Link('placelist.php?id={$id}'));
