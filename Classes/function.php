<?php
require_once 'db_connect.php';

use DataBase\Connect as conn;

$connect = new conn('Scms');

function getWord($word_id, $language){
  $res = $connect->getRowTable('dictonary', "word_id='".$word_id." and language_id='".$language."'");
  return $res[0]['word'];
}
