<?php
session_start();
if ($_SESSION['id_user'] != 1) {
   header('location:system.php');
}
?>

<p>estas en la lista de usuario</p>