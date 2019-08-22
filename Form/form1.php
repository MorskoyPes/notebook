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
$comment->time = date("h:i:s");
 R::store($comment);

// READ
$zapros = R::exec('SELECT * FROM comment');
print_r($zapros);

$ids = [];
for ($i=0; $i <= $zapros; $i++) {
	array_push($ids, $i);
}
print_r($ids);
$comments = R::loadAll('comment', $ids);
foreach ($comments as $comment){
  echo $comment->message.' ';
  echo $comment->time.'<br>';
}
$a = "5";

 ?>