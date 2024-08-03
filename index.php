<?php
session_start();
if (isset($_SESSION['username'])) {
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <style>
            <?php include "style.css" ?>
        </style>
    </head>

    <body>
        <div class="wrapper">
            <div class="add-employee">
                <h3>Order List</h3>
                <div>
                    <a href="logout.php" class="add">Log Out</a>
                    <a href="create.php" class="add">Add Order</a>
                </div>
            </div>
            <div class="form-table">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Product's Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    include "config.php";

                    $sql = "select * from phpfinal.orders";
                    $query = mysqli_query($conn, $sql);
                    $no = 1;

                    if (isset($_GET['cari'])) {
                        $keyword = $_GET['cari'];
                        $sql =
                            "SELECT * FROM phpfinal.orders WHERE name LIKE '%$keyword%'";
                        $query_cari = mysqli_query($conn, $sql);

                        foreach ($query_cari as $data) {
                            ?>
                            <tr>
                                <td><?php echo $data['id_order'] ?></td>
                                <td><?php echo $data['customer_name'] ?></td>
                                <td><?php echo $data['product_name'] ?></td>
                                <td><?php echo $data['price'] ?></td>
                                <td><?php echo $data['number'] ?></td>
                                <td><?php echo $data['total_price'] ?></td>
                                <td>
                                    <a href="delete.php?id_order=<?php echo $data['id_order'] ?>" class="delete">Delete</a>
                                    <a href="update.php?id_order=<?php echo $data['id_order'] ?>" class="update">Update</a>
                                </td>
                            </tr>
                            <?php
                            $no++;
                        }
                    } else {
                        $sql =
                            "SELECT * FROM phpfinal.orders";
                        $query_cari = mysqli_query($conn, $sql);

                        foreach ($query_cari as $data) {
                            ?>
                            <tr>
                                <td><?php echo $data['id_order'] ?></td>
                                <td><?php echo $data['customer_name'] ?></td>
                                <td><?php echo $data['product_name'] ?></td>
                                <td><?php echo $data['price'] ?></td>
                                <td><?php echo $data['number'] ?></td>
                                <td><?php echo $data['total_price'] ?></td>
                                <td>
                                    <a href="delete.php?id_order=<?php echo $data['id_order'] ?>" class="delete">Delete</a>
                                    <a href="update.php?id_order=<?php echo $data['id_order'] ?>" class="edit">Update</a>
                                </td>
                            </tr>
                            <?php
                            $no++;
                        }
                    }
                    ?>

                </table>
    </body>

    </html>
    <?php
} else {
    echo "<script>
        alert ('No puedes acceder esta pagina');
        location.href='homepage.php';
        
        </script>";
}
?>