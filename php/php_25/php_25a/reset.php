<?php 
if(isset($_COOKIE['compteur'])) {
    setcookie('compteur', 0);
    header('location: index.php');

} else {
    header('location: index.php');
}
?>