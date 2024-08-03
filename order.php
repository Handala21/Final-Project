<?php
include "config.php";

// $id_order = $_POST['id_order'];
$customer_name = $_POST['customer_name'];
$product_name = $_POST['product_name'];
$date = $_POST['date'];
$number = $_POST['number'];
$price = $_POST['price'];
$total_price = $_POST['total_price'];

$sql1 = "SELECT * FROM orders";
$query1 = mysqli_query($conn, $sql1);
$row = mysqli_num_rows($query1);
$id = $row + 1;

$sql = "INSERT INTO orders VALUES('$id','$customer_name', '$product_name', '$date', '$number', '$price', '$total_price')";

$query = mysqli_query($conn, $sql);

if ($query) {
    echo "
            <script>
                alert('New Order');
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