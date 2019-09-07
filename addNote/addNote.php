<?php

require '../rb/rb.php';
R::setup( 'mysql:host = 127.0.0.1;
 dbname=notebook',
 'root',
 '');

if (!R::testConnection()) {
	exit ('Нет подключения к базе данных!');
}
// CREATE
$comment = R::dispense('comment');

$comment->name = $_POST['name'];
$comment->message = $_POST['message'];
$comment->date = date("l d F Y");
$comment->date_calendar = date("m/d/y");
$comment->time = date("h:i:s");
 R::store($comment);

// Считывает сколько записей имеется в общем
$all_id = R::exec('SELECT * FROM comment WHERE id');
print_r($all_id);

$comments = R::loadAll('comment', $all_id);
foreach ($comments as $comment){
  echo $comment->id.'<br>';
  echo $comment->name.'<br>';
}

 ?>