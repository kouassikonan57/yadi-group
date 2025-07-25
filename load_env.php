<?php
function load_env($path) {
  if (!file_exists($path)) return;

  $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  foreach ($lines as $line) {
    if (strpos(trim($line), '#') === 0 || !strpos($line, '=')) continue;

    list($name, $value) = explode('=', $line, 2);
    $name = trim($name);
    $value = trim($value);

    putenv("$name=$value");
    $_ENV[$name] = $value;
    $_SERVER[$name] = $value;
  }
}
