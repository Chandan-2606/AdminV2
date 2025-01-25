<?php

include_once("../../config/conn.php");

$getIsAdminQ = "SELECT isAdmin FROM registration WHERE email = '{$_SESSION['adminEmail']}'";
$isAdmin = mysqli_fetch_column(mysqli_query($conn, $getIsAdminQ));

$getPathQ = "SELECT imagePath FROM registration WHERE email = '{$_SESSION['adminEmail']}'";
$imagePath = mysqli_fetch_column(mysqli_query($conn, $getPathQ));
