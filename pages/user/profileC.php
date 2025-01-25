<?php

include_once("../../config/conn.php");

$getPathQ = "SELECT imagePath FROM registration WHERE email = '{$_SESSION['userEmail']}'";
$imagePath = mysqli_fetch_column(mysqli_query($conn, $getPathQ));
