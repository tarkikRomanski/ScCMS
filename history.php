<?php
require_once 'Classes/db_connect.php';
use DataBase\Connect as conn;
$connect = new conn('Scms');
?>
<h1>Історія навчального закладу</h1>
<div class="historyContent">
  <?php
    $h = $connect->getRowTable('history', 'id=1');
    echo $h[0]['history'];
  ?>
</div>
