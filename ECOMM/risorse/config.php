<?php 
  defined('DS') ? null : define('DS',DIRECTORY_SEPARATOR);
  defined('FRONT_END') ? null : define('FRONT_END', __DIR__ . DS . 'templates/front');
  defined('BACK_END') ? null : define('BACK_END', __DIR__ . DS . 'templates/back');
  //configurare database
  define('DB_HOST','localhost');
  define('DB_UTENTE','root');
  define('DB_PASSWORD','root');
  define('DB_NOME','negozio');

  $connessione = mysqli_connect(DB_HOST,DB_UTENTE,DB_PASSWORD,DB_NOME);

  require_once('funzioni.php');
?>