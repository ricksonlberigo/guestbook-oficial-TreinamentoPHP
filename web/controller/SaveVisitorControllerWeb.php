<?php

require_once __DIR__ . '/../../src/controller/SaveVisitorController.php';

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
    echo 'Visitante salvo com sucesso <a href="' . $_SERVER['HTTP_REFERER'] . '">Voltar</a>';
  } catch (\Exception $e) {
    header('Content-Type: text/html; charset=utf8', true, 400);
    echo $e->getMessage() . '<a href="' . $_SERVER['HTTP_REFERER'] . '">Voltar</a>';
  }
}
