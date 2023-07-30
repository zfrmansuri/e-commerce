<?php
@include'data-base-connect/config.php';
session_start();
session_unset();
session_destroy();

header('location:account.php');
?>