<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1>Add to Packing table</h1>
<form action="packsave.php" method="POST">
        <div class="prod_id">Pack ID: <input type="text" id="prod_id" name="pack_id" placeholder="Pack ID"required><br></div>
        <div class="prod_name">Order ID: <input type="text" id="prod_name" name="order_id" placeholder="Order ID"required><br></div>
        <div class="prod_desc">Status: <input type="text" id="prod_desc" name="status" placeholder="Status"required><br></div>
        <div class="subBtn"><input type="submit" id="AddBtn" name="submit" value="ADD DATA"></div>
    </form>
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
    <h1 class="header"><br>Orders</h1>
    <form action="orders.php" method="POST">
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