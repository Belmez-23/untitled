<?php
date_default_timezone_set('America/New_York');

$timezone = new DateTimeZone('Russia/Moscow');

$datetime = new \DateTime('2014-08-20', $timezone);

$datetime->setTimezone(new DateTimeZone('Asia/Hong_Kong'));
