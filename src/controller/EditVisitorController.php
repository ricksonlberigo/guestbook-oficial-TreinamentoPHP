<?php

require_once __DIR__ . '/../repository/guestbookRepository.php';
require_once __DIR__ . '/../../lib/flashMessage.php';

function editVisitor(array $visitor)
{
  if (!$visitor['email']) {
    throw new \Exception('Informe e-mail valido');
  }
  if (!$visitor['name']) {
    throw new \Exception('Informe seu nome');
  }
  editVisitorInCSV($visitor);
  setFlashMessage('edit-visitor', 'Visitante editado com sucesso!');
}
