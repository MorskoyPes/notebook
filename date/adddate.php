<?php
require 'C:/Winginx/home/notebook/public_html/connect.php';
$date_calendar = R::getCol('SELECT date_calendar FROM comment');

$date_viev = $_GET['date_calendar'];


$comments = R::getAll('SELECT `date_calendar` FROM `comment` WHERE `date_calendar` = ?', [$date_viev]);

foreach ($comments as $comment){
  echo $comment['date_calendar'].'<br>';
}

// Вытаскивает из URLa id и удаляет эту конкретную запись

// print_r($date_viev);

// $comments = R::load('comment', $date_viev);
// foreach ($comments as $comment){
//   echo $comment->date_calendar;
// }


 ?>