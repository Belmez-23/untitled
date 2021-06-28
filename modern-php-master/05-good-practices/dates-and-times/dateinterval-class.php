<?php
date_default_timezone_set('Russia/Moscow');

// Create DateTime instance
$datetime = new DateTime('2021-06-22 14:34');

// Create two weeks interval
$interval = new DateInterval('P2W');

// Modify DateTime instance
$datetime->add($interval);
echo $datetime->format('Y-m-d H:i');
