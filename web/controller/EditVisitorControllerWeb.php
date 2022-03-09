<?php

require_once __DIR__ . '/../../src/controller/editVisitorController.php';

$config = parse_ini_file(__DIR__ . '/../../config.ini');
putenv('GUESTBOOK=' . $config['GUESTBOOK']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // normalization do POST
  $visitor = [
    'email' => $_GET['email'] ?? null, // coalesce
    'name' => $_POST['name'] ?? null,
  ];
  try {
    editVisitor($visitor);
    header('Location: /admin.php', true, 303);
  } catch (\Exception $e) {
    header('Content-Type: text/html; charset=utf8', true, 400);
    echo $e->getMessage() . '<a href="' . $_SERVER['HTTP_REFERER'] . '">Voltar</a>';
  }
}
