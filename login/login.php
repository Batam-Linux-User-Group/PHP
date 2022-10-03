<?php 

session_start();

include '../DB/connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($db, "SELECT * FROM user WHERE username = '$username' and password = '$password'");

$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    if ($data['level'] == 'Admin') {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = 'Admin';

        header("location:../user/admin.html");
    } elseif ($data['level'] == 'User') {

        $_SESSION['username'] = $username;
        $_SESSION['level'] = 'User';
        
        header("location:../user/user.html");
    } else {
        header("location:index.php?login=Failed");
    }
} else {
    header("location:index.php?login=Failed");
}

?>