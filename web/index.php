<?php

require_once __DIR__ . '/../lib/templateHandler.php';
require_once __DIR__ . '/../lib/flashMessage.php';

$config = parse_ini_file(__DIR__ . '/../config.ini');
putenv('GUESTBOOK=' . $config['GUESTBOOK']);

render(__DIR__ . '/templates/indexTemplate.php');
