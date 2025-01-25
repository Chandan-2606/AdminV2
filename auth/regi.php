<?php
include_once("../config/dbconn.php");
include_once("header.php");
include_once("topbar.php");
include_once("sidebar.php");

?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Project Edit</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link
        rel="stylesheet"
        href="../assets/plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link
        rel="stylesheet"
        href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- SweetAlert2 -->
    <link
        rel="stylesheet"
        href="../assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" />
    <!-- Toastr -->
    <link rel="stylesheet" href="../assets/plugins/toastr/toastr.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css" />
    <!-- Google Font: Source Sans Pro -->
    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
        rel="stylesheet" />
</head>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['username'] == '' || $_POST['email'] == '' || $_POST['password'] == '') {
        // echo "Pleace fill all inputs";

    } else {

        $username = trim($_POST["username"]);
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
        $note = trim($_POST["note"]);
        $isAdmin = $_POST["isAdmin"];
        // echo $isAdmin;

        $sql = "insert into registration" .
            "(userName, email, password, note, isAdmin)" . "values" .
            "('$username','$email','$password','$note','$isAdmin')";

        if (mysqli_query($conn, $sql)) {
            $username = $email = $password = $note = $isAdmin = '';

            echo "<script>
          // history.go(-2);
          window.location.href = 'userList.php' ;
          </script>";

            // echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
mysqli_close($conn);
?>

<body class="hold-transition sidebar-mini">

    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add User</h1>
                    </div>



                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add User</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div style="margin:auto auto;" class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add New User</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <form id="form1" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">User Name</label>
                                    <input type="text" id="inputName" class="form-control" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Email</label>
                                    <input type="email" id="inputClientCompany" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">Password</label>
                                    <input type="password" id="inputProjectLeader" class="form-control" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Description</label>
                                    <textarea id="inputDescription" class="form-control" rows="4" name="note" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Make Admin</label>
                                    <select class="form-control custom-select" name="isAdmin">
                                        <option value="False" selected>False</option>
                                        <option value="True">True</option>
                                    </select>
                                </div>

                            </div>

                            <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="row">
                        <div class="col-12">
                            <a href="index.php" class="btn btn-secondary">Cancel</a>
                            <input type="submit" value="Create new Porject" class="btn btn-success float-right">
                        </div>
                    </div>
                    </form>
                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->



    <!-- --------------------------------------------------- -->

    <!-- jQuery -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="../assets/plugins/toastr/toastr.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../assets/dist/js/demo.js"></script>

    <script type="text/javascript">
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
            });

            $(".swalDefaultSuccess").click(function() {
                Toast.fire({
                    type: "success",
                    title: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                });
            });
            $(".swalDefaultInfo").click(function() {
                Toast.fire({
                    type: "info",
                    title: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                });
            });
            $(".swalDefaultError").click(function() {
                Toast.fire({
                    type: "error",
                    title: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                });
            });
            $(".swalDefaultWarning").click(function() {
                Toast.fire({
                    type: "warning",
                    title: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                });
            });
            $(".swalDefaultQuestion").click(function() {
                Toast.fire({
                    type: "question",
                    title: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                });
            });

            $(".toastrDefaultSuccess").click(function() {
                toastr.success(
                    "Lorem ipsum dolor sit amet, consetetur sadipscing elitr."
                );
            });
            $(".toastrDefaultInfo").click(function() {
                toastr.info(
                    "Lorem ipsum dolor sit amet, consetetur sadipscing elitr."
                );
            });
            $(".toastrDefaultError").click(function() {
                toastr.error(
                    "Lorem ipsum dolor sit amet, consetetur sadipscing elitr."
                );
            });
            $(".toastrDefaultWarning").click(function() {
                toastr.warning(
                    "Lorem ipsum dolor sit amet, consetetur sadipscing elitr."
                );
            });

            $(".toastsDefaultDefault").click(function() {
                $(document).Toasts("create", {
                    title: "Toast Title",
                    body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                });
            });
            $(".toastsDefaultTopLeft").click(function() {
                $(document).Toasts("create", {
                    title: "Toast Title",
                    position: "topLeft",
                    body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                });
            });
            $(".toastsDefaultBottomRight").click(function() {
                $(document).Toasts("create", {
                    title: "Toast Title",
                    position: "bottomRight",
                    body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                });
            });
            $(".toastsDefaultBottomLeft").click(function() {
                $(document).Toasts("create", {
                    title: "Toast Title",
                    position: "bottomLeft",
                    body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                });
            });
            $(".toastsDefaultAutohide").click(function() {
                $(document).Toasts("create", {
                    title: "Toast Title",
                    autohide: true,
                    delay: 750,
                    body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                });
            });
            $(".toastsDefaultNotFixed").click(function() {
                $(document).Toasts("create", {
                    title: "Toast Title",
                    fixed: false,
                    body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                });
            });
            $(".toastsDefaultFull").click(function() {
                $(document).Toasts("create", {
                    body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                    title: "Toast Title",
                    subtitle: "Subtitle",
                    icon: "fas fa-envelope fa-lg",
                });
            });
            $(".toastsDefaultFullImage").click(function() {
                $(document).Toasts("create", {
                    body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                    title: "Toast Title",
                    subtitle: "Subtitle",
                    image: "../../dist/img/user3-128x128.jpg",
                    imageAlt: "User Picture",
                });
            });
            $(".toastsDefaultSuccess").click(function() {
                $(document).Toasts("create", {
                    class: "bg-success",
                    title: "Toast Title",
                    subtitle: "Subtitle",
                    body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                });
            });
            $(".toastsDefaultInfo").click(function() {
                $(document).Toasts("create", {
                    class: "bg-info",
                    title: "Toast Title",
                    subtitle: "Subtitle",
                    body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                });
            });
            $(".toastsDefaultWarning").click(function() {
                $(document).Toasts("create", {
                    class: "bg-warning",
                    title: "Toast Title",
                    subtitle: "Subtitle",
                    body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                });
            });
            $(".toastsDefaultDanger").click(function() {
                $(document).Toasts("create", {
                    class: "bg-danger",
                    title: "Toast Title",
                    subtitle: "Subtitle",
                    body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                });
            });
            $(".toastsDefaultMaroon").click(function() {
                $(document).Toasts("create", {
                    class: "bg-maroon",
                    title: "Toast Title",
                    subtitle: "Subtitle",
                    body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
                });
            });
        });
    </script>
    <!-- --------------------------------------------------- -->

    <!-- /Footer -->