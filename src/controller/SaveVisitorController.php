<?php

require_once __DIR__ . '/../repository/guestbookRepository.php';
require_once __DIR__ . '/../../lib/flashMessage.php';

function saveVisitor(array $visitor)
{
  // Validation
  if (!$visitor['email']) {
    throw new \Exception('Informe o e-mail para prosseguir com o envio do formulário');
  }
  if (!$visitor['name']) {
    throw new \Exception('Informe o nome para prosseguir com o envio do formulário');
  }
  saveVisitorInCSV($visitor);
  setFlashMessage('save-visitor', 'Visitante gravado com sucesso!');
}
