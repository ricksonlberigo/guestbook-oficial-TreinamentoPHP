<?php

require_once __DIR__ . '/../repository/guestbookRepository.php';

function editVisitor(array $visitor)
{
  if (!$visitor['email']) {
    throw new \Exception('Informe e-mail valido');
  }
  if (!$visitor['name']) {
    throw new \Exception('Informe seu nome');
  }
  editVisitorInCSV($visitor);
}
