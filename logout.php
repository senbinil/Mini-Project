<?php

session_start();
session_unset();
session_destroy();
header('Location: adminlog.php');
exit;

?>