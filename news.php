<?php
require_once 'Classes/db_connect.php';
use DataBase\Connect as conn;
$connect = new conn('Scms');

$id = $_GET['id'];

$news = $connect->getRowTable('news', 'id='.$id);
$author = $connect->getRowTable('users', 'id='.$news[0]['users_id']);
$author = $author[0]['nickname'];
?>

<h1><?php echo $news[0]['title']; ?></h1>
<p>Опубліковано: <?php echo $news[0]['publication'] . ', ' . $author; ?></p>

<div id="newsContent">
  <?php echo $news[0]['bbText']; ?>
</div>
