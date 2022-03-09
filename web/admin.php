<?php

require_once __DIR__ . '/../lib/templateHandler.php';
require_once __DIR__ . '/../src/repository/guestbookRepository.php';

$config = parse_ini_file(__DIR__ . '/../config.ini');
putenv('GUESTBOOK=' . $config['GUESTBOOK']);

$rawlist = [];
foreach (listAllVisitors() as $visitor) {
  $rawlist[] = $visitor;
}

render(__DIR__ . '/templates/adminTemplate.php', ['visitors' => $rawlist]);
