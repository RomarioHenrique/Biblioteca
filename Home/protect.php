<?php
  if(!isset($_SESSION)) {
    session_start();
  }

  
  if(!isset($_SESSION['id'])) {
    die("<a href=\"../Login/hindex.php\">Você não pode acessar esta página sem primeiro logar com seu usuário</a>");
  }

?>