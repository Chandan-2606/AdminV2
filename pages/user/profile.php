<?php session_start();
include_once("profileC.php");
if (!isset($_SESSION['userEmail']) && $_SESSION['login'] !== true) {
    header("location:../../auth/login.php");
}
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Profile</title>

    <!-- Font Awesome Icons -->
    <link
        rel="stylesheet"
        href="../../assets/plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link
        rel="stylesheet"
        href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css" />
    <!-- Google Font: Source Sans Pro -->
    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
        rel="stylesheet" />
    <style>
        .circle-container {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            margin: auto;
            align-items: center;
            justify-content: center;
            background: #f0f0f0;
        }

        .circle-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once("include/navbar.php"); ?>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center circle-container">
                                        <img
                                            class="profile-user-img img-fluid img-circle"
                                            src="<?php echo $imagePath; ?>"
                                            alt="User profile picture" />
                                    </div>

                                    <h3 class="profile-username text-center">
                                        <?php echo $_SESSION['userName']; ?>
                                    </h3>

                                    <!-- <p class="text-muted text-center">Software Engineer</p> -->

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Followers</b> <a class="float-right">1,322</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Following</b> <a class="float-right">543</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Friends</b> <a class="float-right">13,287</a>
                                        </li>
                                    </ul>

                                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- About Me Box -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">About Me</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1"></i> Education</strong>

                                    <p class="text-muted">
                                        B.S. in Computer Science from the University of Tennessee
                                        at Knoxville
                                    </p>

                                    <hr />

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i>
                                        Location</strong>

                                    <p class="text-muted">Malibu, California</p>

                                    <hr />

                                    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                                    <p class="text-muted">
                                        <span class="tag tag-danger">UI Design</span>
                                        <span class="tag tag-success">Coding</span>
                                        <span class="tag tag-info">Javascript</span>
                                        <span class="tag tag-warning">PHP</span>
                                        <span class="tag tag-primary">Node.js</span>
                                    </p>

                                    <hr />

                                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Etiam fermentum enim neque.
                                    </p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="card">
                                <!-- general form elements -->
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title">Upload</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form action="uploadC.php" role="form" method="post" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <!-- <label for="exampleInputEmail1">Text</label> -->
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter some text">
                                            </div>

                                            <div class="form-group">
                                                <!-- <label for="exampleInputFile">Upload Image</label> -->
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="fileToUpload">
                                                        <label class="custom-file-label" for="exampleInputFile">Upload Image</label>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer text-center ">
                                            <input type="submit" class="btn btn-primary px-5" value="Submit" name="btnUpload">

                                        </div>
                                    </form>
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a
                                                class="nav-link active"
                                                href="#activity"
                                                data-toggle="tab">Activity</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="activity">
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

                                            <!-- Post -->
                                            <div class="post clearfix">
                                                <div class="user-block">
                                                    <img
                                                        class="img-circle img-bordered-sm"
                                                        src="../../assets/dist/img/user7-128x128.jpg"
                                                        alt="User Image" />
                                                    <span class="username">
                                                        <a href="#">Sarah Ross</a>
                                                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                                    </span>
                                                    <span class="description">Sent you a message - 3 days ago</span>
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

                                                <form class="form-horizontal">
                                                    <div class="input-group input-group-sm mb-0">
                                                        <input
                                                            class="form-control form-control-sm"
                                                            placeholder="Response" />
                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-danger">
                                                                Send
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.post -->

                                            <!-- Post -->

                                            <!-- /.post -->
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="timeline">
                                            <!-- The timeline -->
                                            <div class="timeline timeline-inverse">
                                                <!-- timeline time label -->
                                                <div class="time-label">
                                                    <span class="bg-danger"> 10 Feb. 2014 </span>
                                                </div>
                                                <!-- /.timeline-label -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fas fa-envelope bg-primary"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                                        <h3 class="timeline-header">
                                                            <a href="#">Support Team</a> sent you an email
                                                        </h3>

                                                        <div class="timeline-body">
                                                            Etsy doostang zoodles disqus groupon greplin
                                                            oooj voxy zoodles, weebly ning heekya handango
                                                            imeem plugg dopplr jibjab, movity jajah plickers
                                                            sifteo edmodo ifttt zimbra. Babblely odeo
                                                            kaboodle quora plaxo ideeli hulu weebly
                                                            balihoo...
                                                        </div>
                                                        <div class="timeline-footer">
                                                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fas fa-user bg-info"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                                                        <h3 class="timeline-header border-0">
                                                            <a href="#">Sarah Young</a> accepted your friend
                                                            request
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fas fa-comments bg-warning"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                                                        <h3 class="timeline-header">
                                                            <a href="#">Jay White</a> commented on your post
                                                        </h3>

                                                        <div class="timeline-body">
                                                            Take me to your leader! Switzerland is small and
                                                            neutral! We are more like Germany, ambitious and
                                                            misunderstood!
                                                        </div>
                                                        <div class="timeline-footer">
                                                            <a
                                                                href="#"
                                                                class="btn btn-warning btn-flat btn-sm">View comment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <!-- timeline time label -->
                                                <div class="time-label">
                                                    <span class="bg-success"> 3 Jan. 2014 </span>
                                                </div>
                                                <!-- /.timeline-label -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fas fa-camera bg-purple"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                                                        <h3 class="timeline-header">
                                                            <a href="#">Mina Lee</a> uploaded new photos
                                                        </h3>

                                                        <div class="timeline-body">
                                                            <img
                                                                src="http://placehold.it/150x100"
                                                                alt="..." />
                                                            <img
                                                                src="http://placehold.it/150x100"
                                                                alt="..." />
                                                            <img
                                                                src="http://placehold.it/150x100"
                                                                alt="..." />
                                                            <img
                                                                src="http://placehold.it/150x100"
                                                                alt="..." />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <div>
                                                    <i class="far fa-clock bg-gray"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->

                                        <div class="tab-pane" id="settings">
                                            <form class="form-horizontal">
                                                <div class="form-group row">
                                                    <label
                                                        for="inputName"
                                                        class="col-sm-2 col-form-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input
                                                            type="email"
                                                            class="form-control"
                                                            id="inputName"
                                                            placeholder="Name" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        for="inputEmail"
                                                        class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input
                                                            type="email"
                                                            class="form-control"
                                                            id="inputEmail"
                                                            placeholder="Email" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        for="inputName2"
                                                        class="col-sm-2 col-form-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="inputName2"
                                                            placeholder="Name" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        for="inputExperience"
                                                        class="col-sm-2 col-form-label">Experience</label>
                                                    <div class="col-sm-10">
                                                        <textarea
                                                            class="form-control"
                                                            id="inputExperience"
                                                            placeholder="Experience"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        for="inputSkills"
                                                        class="col-sm-2 col-form-label">Skills</label>
                                                    <div class="col-sm-10">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="inputSkills"
                                                            placeholder="Skills" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="offset-sm-2 col-sm-10">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" /> I agree to the
                                                                <a href="#">terms and conditions</a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="offset-sm-2 col-sm-10">
                                                        <button type="submit" class="btn btn-danger">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.nav-tabs-custom -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../../assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>