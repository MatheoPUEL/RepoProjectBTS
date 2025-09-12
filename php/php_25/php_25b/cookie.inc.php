<?php
setcookie('compteur', 0);
$tableau = explode(',', $_COOKIE["compteur"]);
setcookie("compteur",implode(',',$tableau));