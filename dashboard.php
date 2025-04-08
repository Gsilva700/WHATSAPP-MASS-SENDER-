<?php
session_start();
include 'conexao.php';
if (!isset($_SESSION['user_id'])) header("Location: index.php");
// ...restante do conteúdo omitido por brevidade
?>