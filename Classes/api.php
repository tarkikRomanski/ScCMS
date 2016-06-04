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
    case 'addTopic':
      $nowDate = date('Y-m-d H:i:s');
      $values = array($_POST['title'], $_POST['bb'], $nowDate, $_COOKIE['userId']);
      $columns = array('title','bbText', 'publication', 'users_id' );
      $result = $connect->insertDataTable('topics', $values, $columns);
      echo $result;
      break;
      case 'addComment':
      $nowDate = date('Y-m-d H:i:s');
      $values = array($_POST['text'], $_POST['target'], $nowDate, $_COOKIE['userId'], 1);
      $columns = array('text','target', 'created', 'users_id', 'target_id' );
      $result = $connect->insertDataTable('comments', $values, $columns);
      echo $result;
      break;
      case 'addHistory':
      $value = $_POST['bb'];
      $column = 'history';
      $result = $connect->setDataTable('history', $column, $value, 'id=1');
      echo $result;
      break;
  }

?>
