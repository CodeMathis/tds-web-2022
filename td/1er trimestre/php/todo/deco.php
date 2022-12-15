<?php
session_start();
session_destroy();
$_SESSION=[];
include "index.php";
?>