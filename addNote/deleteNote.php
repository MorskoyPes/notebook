<?php
// Код возвращает на страницу назад, чтобы не смотреть на пустую страницу с URLом
  if (@$_SERVER['HTTP_REFERER'] != null) {
     header("Location: ".$_SERVER['HTTP_REFERER']);
  }

require '../rb/rb.php';
R::setup( 'mysql:host = 127.0.0.1;
 dbname=notebook',
 'root',
 '');

if (!R::testConnection()) {
	exit ('Нет подключения к базе данных!');
}

// Вытаскивает из URLa id и удаляет эту конкретную запись
$id = $_GET['id'];

R::hunt('comment', 'id = ?', [$id]);





 ?>