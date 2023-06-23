<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<?php
    include("config.php");

    if (isset($_GET['id'])) {
        $order_id = $_GET['id'];

        // Fetch the product from the database based on the product ID
        $sql = "SELECT * FROM orders WHERE order_id = $order_id";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $orderId = $row['order_id'];
            $prodId = $row['prod_id'];
            $QTY = $row['QTY'];
            $orderDate = $row['order_date'];

            // Display the edit form with pre-filled values
            echo "
            <form action='ordersupdate.php' method='POST'>
                <input type='hidden' name='order_id' value='$orderId'>
                <label for='prod_id'>Prod ID:</label>
                <input type='text' id='prod_name' name='prod_id' value='$prodId' required><br>
                <label for='QTY'>QTY:</label>
                <input type='text' id='prod_desc' name='QTY' value='$QTY' reqired><br>
                <label for='order_date'>Order Date:</label>
                <input type='text' id='prod_desc' name='order_date' value='$orderDate' ><br>
                <input type='submit' name='submit' value='Update'>
                
            </form>";
        } else {
            echo "Product not found.";
        }
    } else {
        echo "Invalid request.";
    }
?>
<h1 class="header"><br>Orders</h1>
    <form action="orders.php" method="POST">
    <div class="seachBtn"><input type="submit" id="search-Btn" name="search" value="Add"></div>
    </form>
    <?php
        include("config.php");
        $sql = "SELECT * FROM orders";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Order ID</th><th>Product ID</th><th>QTY</th><th>Order Date</th>";
            echo "</tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['order_id'] . "</td>";
                echo "<td>" . $row['prod_id'] . "</td>";
                echo "<td>" . $row['QTY'] . "</td>";
                echo "<td>" . $row['order_date'] . "</td>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }    
    ?>


<form method="POST" action="index.php">
        <div class="backBtn"><input type="submit" id="BACKbtn" name="search" value="BACK"></div>

    </form>

</body>
</html>