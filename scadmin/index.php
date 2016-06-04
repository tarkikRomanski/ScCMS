<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Адмінпанель</title>
    <link rel="stylesheet" href="../css/default/wbbtheme.css" />
    <link rel="stylesheet" href="../css/themes/matherial-main.css"/>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script src="../js/jquery.wysibb.min.js"></script>
    <script src="../js/ua.js"></script>
  </head>
  <body>
    <div id="adminNav">
      <a href="?adm=history">Правити історію</a>
      <a href="?adm=best">Добавити гордість</a>
      <a href="?adm=news">Добавити новину</a>
    </div>
    <div id="adminContent">
      <?php
      if(isset($_GET['adm'])):
        switch ($_GET['adm']):
          case 'history':
            include 'addHistory.php';
            break;
          case 'best':
            include 'addBest.php';
            break;
          case 'news':
            include 'addNews.php';
            break;
        endswitch;
      endif;
      ?>
    </div>
  </body>
</html>
