<?php
session_start();
session_destroy();
header("location: loginnuevo.html"); 
exit();

?>