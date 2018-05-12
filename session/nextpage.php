<?php
session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];

echo($userid . $username);