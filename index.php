<?php
function autoloader($class)
{
    include_once ($class. ".php");
};
spl_autoload_register("autoloader");

//creating Company Class instance with primary staff
$google = new Company('Google', new Staff([new Person('Vasya'), new Person('Tolik'), new Person('Jigurda')]));
print_r($google);
echo "<br><br>";

$timur = new Person('Timur');
$google->hire($timur);
print_r($google);
echo "<br><br>";

$google->fire($timur);
print_r($google);
echo "<br><br>";

$google->fire('Tolik');
print_r($google);
echo "<br><br>";
?>