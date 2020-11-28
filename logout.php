<?php
require_once 'inc/dbconnect.php';
require 'inc/core.php';
session_destroy();

header('Location: index.php');
?>