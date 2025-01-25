<?php
include_once("../config/conn.php");

session_start();
$loginEmail = trim($_POST['loginEmail']);
$loginPass = trim($_POST['loginPass']);

$userQ = "SELECT userName, email, password, isAdmin FROM registration WHERE email = '$loginEmail'";

$result = mysqli_query($conn, $userQ);
$row = mysqli_fetch_array($result);


// print_r($_SESSION["email"] . ' ' . $_SESSION['isAdmin']);

// if ($loginEmail == $row['email']) {
// }
// if ($loginPass == $row['password']) {
// }
// if ($loginEmail == $row['email']) {
// }
// if ($loginPass == $row['password']) {
// }
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($loginEmail != $row['email'] && $loginPass != $row['password']) {
        $_SESSION['invalidEmail'] = "Email not found!";
        $_SESSION['invalidPass'] = "Password not matched!";
        header('location:login.php');
    }
    if ($loginEmail != $row['email']) {
        $_SESSION['invalidEmail'] = "Email not found!";
        if ($loginPass != $row['password']) {
            $_SESSION['invalidPass'] = "Password not matched!";
        }
        header('location:login.php');
    }
    if ($loginPass != $row['password']) {
        $_SESSION['invalidPass'] = "Password not matched!";
        header('location:login.php');
    }

    if (($row['email'] == $loginEmail && $row['password'] == $loginPass) && $row['isAdmin'] == "True") {
        $_SESSION['login'] = true;
        $_SESSION['adminName'] = $row['userName'];
        $_SESSION['adminEmail'] = $row['email'];
        $_SESSION['invalidEmail'] = "";
        $_SESSION['invalidPass'] = "";
        header("location:../pages/admin/dashboard.php");
    } elseif (($row['email'] == $loginEmail && $row['password'] == $loginPass) && $row['isAdmin'] == "False") {
        $_SESSION['login'] = true;
        $_SESSION['userName'] = $row['userName'];
        $_SESSION['userEmail'] = $row['email'];
        $_SESSION['invalidEmail'] = "";
        $_SESSION['invalidPass'] = "";
        header("location:../pages/user/profile.php");
    } else {
        header("location:login.php");
    }
}
