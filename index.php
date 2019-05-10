<p>
	Example timer in PHP
</p>


<?php 
require('vendor/autoload.php');
\PHP_Timer::start();
sleep(rand(1, 3));
$time = \PHP_Timer::stop();
print \PHP_Timer::secondsToTimeString($time);
