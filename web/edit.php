<?php

require_once __DIR__ . '/../lib/templateHandler.php';
require_once __DIR__ . '/../src/repository/guestbookRepository.php';

$config = parse_ini_file(__DIR__ . '/../config.ini');
putenv('GUESTBOOK=' . $config['GUESTBOOK']);

$email = $_GET['email'];
$visitor = findVisitorByEmail($email);

render(__DIR__ . '/templates/editTemplate.php', ['visitor' => $visitor]);
