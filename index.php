<?php
require_once 'vendor/autoload.php';

//creating Company Class instance with primary staff
$google = new App\Company('Google', new App\Staff([new App\Person('Vasya'), new App\Person('Tolik'), new App\Person('Jigurda')]));
print_r($google);
echo "<br><br>";

$artem = new App\Person('Artem');
$google->hire($artem);
print_r($google);
echo "<br><br>";

$google->fire($artem);
print_r($google);
echo "<br><br>";

$google->fire('Tolik');
print_r($google);
echo "<br><br>";
?>