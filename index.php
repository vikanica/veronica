<?PHP

require 'vendor/autoload.php';
$app = new \atk4\ui\App('Registration');
$app->initLayout('Centered');
$button = $app->add(['Button','click']);
$button->icon = 'book';
//$a=$_ENV['KEY'];
//$app->add(['Label',$a]);
