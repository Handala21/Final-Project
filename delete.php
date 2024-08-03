<?php

include "config.php";

$id = $_GET['id_order'];

$sql = "DELETE FROM orders WHERE id_order = '$id'";

$query = mysqli_query($conn, $sql);

if ($query) {
    echo "
            <script>
                alert('Delete Employee');
                location.href = 'index.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Failed');
                location.href = 'index.php';
            </script>
        ";
}
