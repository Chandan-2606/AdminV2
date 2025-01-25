

<?php

include_once("../../config/conn.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $selectQ = "SELECT isActive FROM registration WHERE id= $id";
    $isActive = mysqli_fetch_column(mysqli_query($conn, $selectQ));

    if ($isActive != "Active") {
        $updateQ = "UPDATE registration SET isActive = 'Active' WHERE id = $id";
        $result = mysqli_query($conn, $updateQ);
    } else {
        $updateQ = "UPDATE registration SET isActive = 'inActive' WHERE id = $id";
        $result = mysqli_query($conn, $updateQ);
    }

    // if (!$result) {
    //     die('Could not get data: ' . mysqli_error($conn));
    // }
    header("location:userList.php");
}

?>