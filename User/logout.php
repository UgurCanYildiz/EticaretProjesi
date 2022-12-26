<?php

@include 'config.php';

session_start();
session_unset();
session_destroy();

header('location: http://142.93.235.237/');

?>