<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Main page</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/parallax.min.js"></script>
        <link rel="stylesheet" href="css/themes/matherial-main.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    </head>
<body>

    <div class="shadow1" id="header" data-parallax="scroll" data-image-src="image/header.jpg">
        <h1>Вінницька школа №666</h1>
        <div class="fixBtn">
            <?php if (!isset($_COOKIE['userId'])): ?>
            <a href="?page=signin" id="signInLink">
                <i class="material-icons">assignment_ind</i>
            </a>
            <?php else: ?>
            <i id="signout" class="material-icons">exit_to_app</i>
            <?php endif ?>
        </div>
    </div>
    <div id="navigator" class="shadow1">
        <div class="menuItem">Новини</div>
        <div class="menuItem">Форум</div>
        <div class="menuItem">Особистий кабінет</div>
    </div>

<div id="content">
    <?php
    if(isset($_GET['page'])):
        switch($_GET['page']):
            case "signin":
                include_once "signin.php";
                break;

            case "news":
                include_once "news.php";
            break;

            default:
                include_once "default.php";
                break;
        endswitch;
    else:
        include_once "default.php";
    endif;
     ?>
</div>

<script>
    $('#signout').click(function(){
        $.post('Classes/api.php',
            {s: 'signOut'},
            function(data, textStatus, xhr) {
            location.href = location.href;
        });
    })
</script>

</body>
</html>
