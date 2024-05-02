<?php
session_start();
session_abort();
header("location:login.php");
?>