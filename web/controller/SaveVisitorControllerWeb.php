<?php

require_once __DIR__ . '/../../src/controller/SaveVisitorController.php';
require_once __DIR__ . '/../../lib/flashMessage.php';

$config = parse_ini_file(__DIR__ . '/../../config.ini');
putenv('GUESTBOOK=' . $config['GUESTBOOK']);

if ('POST' === $_SERVER['REQUEST_METHOD']) {
  // Normalization
  $visitor = [
    'email' => $_POST['email'] ?? NULL,
    'name' => $_POST['name'] ?? NULL
  ];

  // Persistency
  try {
    saveVisitor($visitor);
    header('Location:' . $_SERVER['HTTP_REFERER'], true, 303);
  } catch (\Exception $e) {
    header('Content-Type: text/html; charset=utf8', true, 400);
    echo $e->getMessage() . '<a href="' . $_SERVER['HTTP_REFERER'] . '">Voltar</a>';
  }
}
