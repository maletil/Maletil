<!-- Maletil 2015-17 -->
<html>
<?php
include "php/mysql/mysqlConnect.php";
connect("abesamelaegsgrja");
?>
    <head>
        <link rel="stylesheet" style="text/css" href="css/main.css"/>
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
        <meta charset="UTF-8"/>
        <link rel="icon" href="img/favicon.png"/>
        <title>Maletil</title>
    </head>

    <body>
        <header>
            <ul>
                <li>Inicio</li>
                <li>About</li>
            </ul>
        </header>
        <div class="header">
            <h1>Maletil</h1>
            <div class="subheader">
                <?php
                include "php/mysql/getTitle.php";
                getSqlTitle();
                ?>
            </div>
        </div>
    <div class="message">
        <?php
        include 'php/dateMessage.php';
        message();
        ?>
    </div>
    </body>
</html>