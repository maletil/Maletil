<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 02/01/2017
 * Time: 19:50
 */
    function message() {
        date_default_timezone_set('Europe/Berlin');
        /* echo date("j");
        echo ("/");
        echo date("n"); */
        if (date("n") == "12") {
            if (date("j") == "25") {
                echo ("FELIZ NAVIDAD");
            }

            if (date("j") == "31") {
                echo ("FELIZ NOCHEVIEJA");
            }
        }

            if (date("n") == "1") {
                if (date("j") == "1") {
                    echo ("FELIZ AÑO NUEVO :)");
                }
            }
    }
?>