<?php

function render(string $filename, array $params = [])
{
  extract($params);
  require_once $filename;
}
