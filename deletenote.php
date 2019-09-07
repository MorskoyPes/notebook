<?php
// Код возвращает на страницу назад, чтобы не смотреть на пустую страницу с URLом

require 'C:/Winginx/home/notebook/public_html/connect.php';

// Вытаскивает из URLa id и удаляет эту конкретную запись
$id_delete = $_GET['id'];

R::hunt('comment', 'id = ?', [$id_delete]);





 ?>