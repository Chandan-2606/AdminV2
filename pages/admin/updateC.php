<!-- ------------ Update ------------ -->
<?php
include_once("../../config/conn.php");

//Reading record for specific id
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM registration WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die('Could not get data: ' . mysqli_error($conn));
    }
    $username = $email = $password = $note = $isAdmin = '';
    while ($row = mysqli_fetch_assoc($result)) {

        $username = $row['userName'];
        $email = $row['email'];
        $password = $row['password'];
        $note = $row['note'];
        $isAdmin = $row['isAdmin'];
    }
}
?>

<?php
// Updating record for specific id
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // if ($_POST['username']=='' || $_POST['email']=='' || $_POST['password']=='' ) {
    //   echo "Pleace fill all inputs";

    // } else {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $note = $_POST["note"];
    $isAdmin = $_POST["isAdmin"];

    // $sql ="insert into registration".
    // "(userName, email, password, note)"."values".
    // "('$username','$email','$password','$note')";
    $sql = "UPDATE registration SET userName ='$username', email='$email'," .
        "password='$password',note='$note', isAdmin='$isAdmin' WHERE id=$id";



    if (mysqli_query($conn, $sql)) {
        $username = $email = $password = $note = '';

        echo '<script>        
          // history.go(-2);
          window.location.href ="userList.php";
          </script>';

        // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!-- ---------- /Update -------------- -->