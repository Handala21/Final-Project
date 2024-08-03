<?php
session_start();
session_destroy();

echo "<script>
        alert ('Berhasil logout');
        location.href='login.php';
    </script>";
?>