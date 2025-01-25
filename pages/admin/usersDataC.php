<!-- ------------------------ -->
<?php
include_once("../../config/conn.php");
$sql = "SELECT * FROM registration";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Could not get data: ' . mysqli_error($conn));
}

$sNo = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $sNo += 1;
?>
    <tr>
        <td><?php echo $sNo ?></td>
        <td><?php echo $row['userName'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['note'] ?></td>
        <td><?php echo $row['isAdmin'] ?></td>
        <td><?php echo $row['isActive'] ?></td>
        <td>
            <a href="update.php?id=<?php echo $row["id"] ?>" class="btn-sm btn-primary mx-2 ">
                <i class="fas fa-edit pl-1 pt-0"></i>
            </a>
            <?php
            if ($row['isActive'] == "Active") { ?>
                <a href="delete.php?id=<?php echo $row["id"] ?>" class="btn-sm btn-warning mx-10"><?php echo "In Active"; ?> </a>
            <?php
            } else { ?>
                <a href="delete.php?id=<?php echo $row["id"] ?>" class="btn-sm btn-success mx-10 px-3"><?php echo " Active"; ?> </a>
            <?php
            } ?>



        </td>
    </tr>
<?php

}
?>

<!-- ------------------------ -->