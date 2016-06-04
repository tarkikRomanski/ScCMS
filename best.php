<h1>Гордість школи</h1>
<?php

require_once 'Classes/db_connect.php';

use DataBase\Connect as conn;

$connect = new conn('Scms');

$bests = $connect->getColumnTable('best');

foreach($bests as $best):?>

  <div class="bestCard" style="background:url(<?php echo $best['img'] ?>) no-repeat;">
    <div class="contentBest">
      <p class="name"><?php echo $best['name'] ?></p>
      <p class="do"><?php echo $best['do'] ?></p>
    </div>
  </div>

<?php endforeach; ?>
