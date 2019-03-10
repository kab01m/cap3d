<?php

require '../php-gpio/vendor/autoload.php';

use PhpGpio\Gpio;

const ENABLE 24;
const DIRX 23;
const STX 17;


$gpio = new GPIO();

$gpio->setup (STX, "out");
$gpio->setup (DIRX, "out");
$gpio->setup (ENABLE, "out");

$gpio->output(ENABLE, 1);
$gpio->output(DIRX, 1);

for ($i = 0; $i = 10; $i++) {
	$gpio->output(STX, 1);
	usleep (100);
	$gpio->output(STX, 0);
	usleep (500);
}

$gpio->output(ENABLE, 0);

?>
