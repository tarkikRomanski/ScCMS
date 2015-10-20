<?php
require_once "connector.php";

use DataBase\Connect as conn;

$connect = new conn("Main");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Main page</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="/js/jquery.wysibb.min.js"></script>
        <link rel="stylesheet" href="/css/default/wbbtheme.css" />
        <script src="/js/ua.js"></script>

        <script>
            var wbbOpt = {
                lang: "ua"
            }
            $(function() {
                $("#editor").wysibb(wbbOpt);
            })
        </script>
    </head>
    <body>
    <textarea id="editor" style="height: 400px;"></textarea>
    </body>
</html>
