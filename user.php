<?php
session_start();
include "config.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['login'])) {
    $sql = "SELECT * FROM user WHERE username = '$username' AND passwordd = '$password'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($query);
    if ($row > 0) {
        $_SESSION['username'] = $username;
        echo "
            <script>
                alert('Login berhasil');
                location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Account could not be found');
            </script>
        ";
    }

} else if (isset($_POST['register'])) {
    $sql = "INSERT INTO user VALUES('$username','$email', '$password')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "
            <script>
                alert('New User');
                location.href = 'login.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Failed');
            </script>
        ";
    }
}

