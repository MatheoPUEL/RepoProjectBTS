<?php
if (isset($_COOKIE["compteur"])) {
    setcookie('compteur', $_COOKIE['compteur'] = $_COOKIE['compteur'] + 1);
} else {
    setcookie('compteur', 0);
}