  <link rel="stylesheet" href="../css/default/wbbtheme.css" />
  <link rel="stylesheet" href="../css/themes/matherial-main.css"/>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script src="../js/jquery.wysibb.min.js"></script>
    <script>
            var wbbOpt = {
                lang: "ua"
            }
            $(function() {
                $("#newsBB").wysibb(wbbOpt);
            })
  </script>
  <script src="../js/ua.js"></script>
<?php if (isset($_COOKIE['userId'])): ?>
  <input type="text" id="newsTitle">
   <p><textarea name="bb" id="newsBB" style="height: 400px;"></textarea></p>
<?php endif ?>
