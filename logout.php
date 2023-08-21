<?php
session_start();
session_destroy();
header("location:http://localhost/parking/login1.php");
?>