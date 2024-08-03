<?php
include "config.php";

$id_order = $_POST['id_order'];
$customer_name = $_POST['customer_name'];
$product_name = $_POST['product_name'];
$date = $_POST['date'];
$number = $_POST['number'];
$price = $_POST['price'];
$total_price = $_POST['total_price'];

$sql = "UPDATE orders SET customer_name = '$customer_name', product_name = '$product_name', date = '$date', number = '$number', price = '$price', total_price = '$total_price' WHERE id_order = '$id_order'";

$query = mysqli_query($conn, $sql);

if ($query) {
    echo "
            <script>
                alert('Update Order');
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