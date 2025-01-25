<?php
include_once("../config/conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $password2 = trim($_POST["password2"]);

    $selectEmail = "SELECT email FROM registration WHERE email LIKE '%$email' ";
    //$note = trim($_POST["note"]);
    //$isAdmin = $_POST["isAdmin"];
    $existEmail = mysqli_fetch_column(mysqli_query($conn, $selectEmail));

    if ($existEmail == $email) {
        $_SESSION['existEmail'] = "Email already exist!";
        if ($password != $password2) {
            $_SESSION['error'] = "Password not match!";
            header("location:register.php");
            exit();
        }
        header("location:register.php");
    } else {
        if ($password != $password2) {
            $_SESSION['error'] = "Password not match!";
            header("location:register.php");
            exit();
        }
        $sql = "INSERT INTO registration" .
            "(userName, email, password)" . "VALUES" .
            "('$username','$email','$password')";

        if (mysqli_query($conn, $sql)) {
            $username = $email = $password = '';


            if (isset($_SESSION['adminEmail']) && $_SESSION['login'] == true) {

                header("location:../pages/admin/userList.php");
            } else {
                header("location:login.php");
            }
            // echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
mysqli_close($conn);
