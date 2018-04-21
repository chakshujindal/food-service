<?php
session_start();
unset($_SESSION['adminusername']);
unset($_SESSION['name']);
header("Location:admlgn.php");
?>