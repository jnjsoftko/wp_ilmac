<?php
function get_env_root() {
  return $_SERVER['DOCUMENT_ROOT'] . "/_env";
}

function get_envs($vars) {
  $root = get_env_root();
  require_once $root . '/vendor/autoload.php';

  $dotenv = Dotenv\Dotenv::createImmutable($root);
  $dotenv->load();

  $envs = array();

  foreach ($vars as $var) {
    $envs[$var] = trim($_ENV[$var]);
  }

  return $envs;
}


function mysql_conn($mysql_env) {
  return new mysqli($mysql_env['MYSQL_IP'], $mysql_env['MYSQL_ID'], $mysql_env['MYSQL_PW'], $mysql_env['MYSQL_DB'], $mysql_env['MYSQL_PORT']);
}
