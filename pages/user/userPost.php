<?php
include_once("../../config/conn.php");
$sql = 'SELECT * FROM registration WHERE isAdmin= "False" ORDER BY update_At DESC';
$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Could not get data: ' . mysqli_error($conn));
}
$username = $email = $note = $created_at = '';
while ($row = mysqli_fetch_assoc($result)) {
    // $userId = $row['Id'];
    $username = $row['userName'];
    $email = $row['email'];
    $note = $row['note'];
    $update_at = $row['update_At'];
    print($username . ' ' . $email . ' ' . $note . ' ' . $update_at . '<br>');
}


die();


?>
<!-- Post -->
<div class="post">
    <div class="user-block">
        <img
            class="img-circle img-bordered-sm"
            src="../../assets/dist/img/user1-128x128.jpg"
            alt="user image" />
        <span class="username">
            <a href="#">Jonathan Burke Jr.</a>
            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
        </span>
        <span class="description">Shared publicly - 7:30 PM today</span>
    </div>
    <!-- /.user-block -->
    <p>
        Lorem ipsum represents a long-held tradition for
        designers, typographers and the like. Some people
        hate it and argue for its demise, but others ignore
        the hate as they create awesome tools to help create
        filler text for everyone from bacon lovers to
        Charlie Sheen fans.
    </p>

    <p>
        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
        <span class="float-right">
            <a href="#" class="link-black text-sm">
                <i class="far fa-comments mr-1"></i> Comments
                (5)
            </a>
        </span>
    </p>

    <input
        class="form-control form-control-sm"
        type="text"
        placeholder="Type a comment" />
</div>
<!-- /.post -->