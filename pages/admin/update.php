<?php
session_start();
if (!isset($_SESSION['email']) && $_SESSION['login'] !== true) {
    header("location:../../auth/login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Project Edit</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once("../include/navbar.php"); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once("../include/sidebar.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <!-- <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Update User</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Update User</li>
                            </ol>
                        </div>
                    </div> -->
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <?php include_once("updateC.php"); ?>
                <form method="post">
                    <div class="row">
                        <div class="col-md-11 mx-auto">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Update Details</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName">User Name</label>
                                        <input type="text" id="inputName" class="form-control" name="username" value="<?php echo $username ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputClientCompany">Email</label>
                                        <input type="email" id="inputClientCompany" class="form-control" name="email" value="<?php echo $email ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputProjectLeader">Password</label>
                                        <input type="text" id="inputProjectLeader" class="form-control" name="password" value="<?php echo $password ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Description</label>
                                        <textarea id="inputDescription" class="form-control" rows="4" name="note" value="<?php echo $note ?>"><?php echo $note ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputStatus">Make Admin</label>
                                        <select class="form-control custom-select" name="isAdmin">
                                            <option><?php echo $isAdmin; ?></option>
                                            <?php if ($isAdmin == "True") {
                                                echo ' <option value="False">False</option>';
                                            } else {
                                                echo '<option value="True">True</option>';
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="userList.php" class="btn btn-secondary">Cancel</a>
                                    <input type="submit" value="Update" class="btn btn-success float-right">
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </form>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../assets/dist/js/demo.js"></script>
</body>

</html>