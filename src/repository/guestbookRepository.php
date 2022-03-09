<?php

function connect()
{
  $db = getenv('GUESTBOOK');
  return fopen($db, 'a+');
}

function close($handle)
{
  fclose($handle);
}

/**
 * @var array
 * Método para salvar o visitante no arquivo CSV
 */
function saveVisitorInCSV(array $visitor)
{
  $handle = connect();
  fputcsv($handle, $visitor);
  close($handle);
}

/**
 * 
 * Método para listar todos os visitantes cadastrados na tela
 */
function listAllVisitors()
{
  $handle = connect();
  while (false === feof($handle)) {
    $register = fgetcsv($handle);
    if ($register) {
      yield [
        'email' => $register[0],
        'name' => $register[1]
      ];
    }
  }
  close($handle);
}


/**
 * @var string
 * Método para procurar o visitante pelo e-mail
 */
function findVisitorByEmail(string $email)
{
  $handle = connect();
  while (false === feof($handle)) {
    $register = fgetcsv($handle);
    if ($register && $register[0] == $email) {
      close($handle);
      return [
        'email' => $register[0],
        'name' => $register[1],
      ];
    }
  }
  close($handle);
  return null;
}

/**
 * @var array
 * Método para editar o visitante
 */
function editVisitorInCSV(array $visitor)
{
  $handle = connect();
  $tmpHandle = fopen(__DIR__ . '/tmpguestbook.csv', 'w');
  while (false === feof($handle)) {
    $reg = fgetcsv($handle);
    if ($reg && $reg[0] == $visitor['email']) {
      $reg[1] = $visitor['name'];
    }
    fputcsv($tmpHandle, $reg);
  }
  close($handle);
  fclose($tmpHandle);
  unlink(getenv('GUESTBOOK'));
  rename($tmpHandle, getenv('GUESTBOOK'));
}

function deleteVisitorInEmail(string $email)
{
  $handle = connect();
  $tmp = fopen('tmp_delete.csv', 'w');
  while (false === feof($handle)) {
    $register = fgetcsv($handle);
    if ($register && $register[0] != $email) {
      fputcsv($tmp, $register);
    }
  }
  close($handle);
  fclose($tmp);
  unlink(getenv('GUESTBOOK'));
  rename('tmp_delete.csv', getenv('GUESTBOOK'));
}
