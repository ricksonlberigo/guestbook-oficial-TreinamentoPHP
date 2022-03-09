<?php

require_once __DIR__ . '/../repository/guestbookRepository.php';
require_once __DIR__ . '/../../lib/flashMessage.php';

function deleteVisitorController(string $email)
{
  deleteVisitorInEmail($email);
  setFlashMessage('delete-visitor', 'Visitante excluído com sucesso!');
}
