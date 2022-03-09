<?php

session_start();

function setFlashMessage(string $id, string $message)
{
  $_SESSION[$id] = $message;
}

function getFlashMessage(string $id)
{
  $message = $_SESSION[$id] ?? NULL;
  unset($_SESSION[$id]);

  return $message;
}
