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
            <h3>Update Orders</h3>
        </div>
        <div class="form-table">
            <form action="proses_update.php" method="post">
                <div class="employee">
                    <?php
                    include "config.php";
                    $id = $_GET['id_order'];

                    $sql = "SELECT * FROM phpfinal.orders WHERE id_order = '$id'";
                    $query = mysqli_query($conn, $sql);

                    foreach ($query as $data) {
                        ?>
                        <div>
                            <label for="id_order">ID order :</label>
                            <input type="text" value="<?php echo $data['id_order'] ?>" name="id_order" readonly>
                        </div>
                        <div>
                            <label for="customer_name">Name :</label>
                            <input type="text" value="<?php echo $data['customer_name'] ?>" name="customer_name" required>
                        </div>
                        <div>
                            <label for="product_name">Product :</label>
                            <input type="text" value="<?php echo $data['product_name'] ?>" name="product_name" required>
                        </div>
                        <div>
                            <label for="date">Date :</label>
                            <input type="date" value="<?php echo $data['date'] ?>" name="date" required>
                        </div>
                        <div>
                            <label for="number">Quantity :</label>
                            <input type="number" value="<?php echo $data['number'] ?>" name="number" id="number" required>
                        </div>
                        <div>
                            <label for="price">Price :</label>
                            <input type="number" value="<?php echo $data['price'] ?>" name="price" id="price" required>
                        </div>
                        <script>
                            document.getElementById("price").oninput = () => {
                                var harga = document.getElementById("price");
                                var jumlah = document.getElementById("number");
                                var total = document.getElementById("total");
                                total.value = harga.value * jumlah.value;
                            }
                        </script>
                        <div>
                            <label for="total_price">Total Price :</label>
                            <input for="total_price" name="total_price" id="total" readonly></input>
                        </div>
                        <div>
                            <div>
                                <input type="submit" value="Submit">
                                <a href="index.php">View Table</a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>
</body>

</html>