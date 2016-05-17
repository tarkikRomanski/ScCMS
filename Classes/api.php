<?php
require_once 'db_connect.php';
require_once 'User.php';

use DataBase\Connect as conn;

$connect = new conn('Scms');
$UserObj = new User();

$s = $_POST['s'];
  switch ($s) {
    case 'signIn':
      $r = $UserObj->signIn($_POST['nickname'], $_POST['password']);
      echo $r;
      break;
    case 'registration':
      $r = $UserObj->newUser($_POST['nickname'], $_POST['password']);
      echo $r;
      break;
    case 'signOut':
      $r = $UserObj->logOut();
      echo $r;
      break;
    case 'addNews':
      $nowDate = date('Y-m-d H:i:s');
      $values = array($_POST['title'], $_POST['bb'], $nowDate, $_COOKIE['userId']);
      $columns = array('title','bbText', 'publication', 'users_id' );
      $result = $connect->insertDataTable('news', $values, $columns);
      echo $result;
      break;
  }

?>
