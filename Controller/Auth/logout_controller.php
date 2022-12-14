<?php
session_start();
session_destroy();
header('location: ../../Controller/home_controller.php');
exit;
?>
