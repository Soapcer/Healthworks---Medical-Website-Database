<?php

//onclick="window.location.href='logout.php'"

session_start();
session_unset();
session_destroy();
header("Location: index.php");
exit();

?>
