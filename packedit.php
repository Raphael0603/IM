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
        $pack_id = $_GET['id'];

        // Fetch the product from the database based on the product ID
        $sql = "SELECT * FROM pack WHERE pack_id = $pack_id";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row =   $result->fetch_assoc();
            $pack_id =  $row['pack_id'];
            $order_id =    $row['order_id'];
            $status =  $row['status'];

            // Display the edit form with pre-filled values
            echo "
            <form action='update.php' method='POST'>
                <input type='hidden' name='pack_id' value='$pack_id'>
                <label for='order_id'>Order ID:</label>
                <input type='text' id='prod_name' name='order_id' value='$order_id' required><br>
                <label for='status'>Status:</label>
                <input type='text' id='prod_desc' name='status' value='$status' ><br>
                <input type='submit' name='submit' value='Update'>
                
            </form>";
        } else {
            echo "Product not found.";
        }
    } else {
        echo "Invalid request.";
    }
?>
<h1 class="header"><br>Packing Status</h1>
    <form action="pack.php" method="POST">
    <div class="seachBtn"><input type="submit" id="search-Btn" name="search" value="Add"></div>
    </form>
    <?php
        include("config.php");
        $sql = "SELECT * FROM pack";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Pack ID</th><th>Order ID</th><th>Status</th>";
            echo "</tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['pack_id'] . "</td>";
                echo "<td>" . $row['order_id'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
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