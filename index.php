<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="header">Products</h1><h3>(sample products only - NOTE: Only online payment is supported)</h3>
    <form action="products.php" method="POST">
        <div class="prod_id">Product ID: <input type="text" id="prod_id" name="prod_id" placeholder="Product ID"required><br></div>
        <div class="prod_name">Product Name: <input type="text" id="prod_name" name="prod_name" placeholder="Product Name"required><br></div>
        <div class="prod_desc">Product Description: <input type="text" id="prod_desc" name="prod_desc" placeholder="Product Description"required><br></div>
        <div class="prod_desc">Price: <input type="text" id="prod_desc" name="price" placeholder="Price"required><br></div>
        <div class="subBtn"><input type="submit" id="AddBtn" name="submit" value="ADD DATA"></div>
</form>
    <?php
        include("config.php");
        $sql = "SELECT * FROM product";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Product ID</th><th>Product Name</th><th>Product Description</th><th>Price</th><th>Modify</th>";
            echo "</tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['prod_id'] . "</td>";
                echo "<td>" . $row['prod_name'] . "</td>";
                echo "<td>" . $row['prod_desc'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>";
                echo "<a href='edit.php?id=" . $row['prod_id'] . "'>Edit</a> | ";
                echo "<a href='delete.php?id=" . $row['prod_id'] . "' onclick='return confirm(\"Are you sure you want to delete this item?\")'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
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
            echo "<th>Order ID</th><th>Product ID</th><th>QTY</th><th>Order Date</th><th>Modify</th>";
            echo "</tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['order_id'] . "</td>";
                echo "<td>" . $row['prod_id'] . "</td>";
                echo "<td>" . $row['QTY'] . "</td>";
                echo "<td>" . $row['order_date'] . "</td>";
                echo "<td>";
                echo "<a href='ordersedit.php?id=" . $row['order_id'] . "'>Edit</a> | ";
                echo "<a href='ordersdelete.php?id=" . $row['order_id'] . "' onclick='return confirm(\"Are you sure you want to delete this item?\")'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }    
    ?>

    <!-- <form method="POST" action="search.php">
        <div class="search-input"><input type="text" id="search-term" name="searchTerm" placeholder="Search item..." required></div>
        <div class="seachBtn"><input type="submit" id="search-Btn" name="search" value="Search"></div>
    </form> -->
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
            echo "<th>Pack ID</th><th>Order ID</th><th>Status</th><th>Modify</th>";
            echo "</tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['pack_id'] . "</td>";
                echo "<td>" . $row['order_id'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td>";
                echo "<a href='packedit.php?id=" . $row['pack_id'] . "'>Edit</a> | ";
                echo "<a href='packdelete.php?id=" . $row['pack_id'] . "' onclick='return confirm(\"Are you sure you want to delete this item?\")'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }    
    ?>
    <h1 class="header"><br>Shipment</h1>
    <form action="shipment.php" method="POST">
    <div class="seachBtn"><input type="submit" id="search-Btn" name="search" value="Add"></div>
    </form>
    <?php
        include("config.php");
        $sql = "SELECT * FROM shipment";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Shipment ID</th><th>Shipment Destination</th>><th>Pack ID</th><th>Ship Date</th><th>Modify</th>";
            echo "</tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['ship_id'] . "</td>";
                echo "<td>" . $row['ship_destination'] . "</td>";
                echo "<td>" . $row['pack_id'] . "</td>";
                echo "<td>" . $row['ship_date'] . "</td>";
                echo "<td>";
                echo "<a href='edit.php?id=" . $row['ship_id'] . "'>Edit</a> | ";
                echo "<a href='deleteCustomer.php?id=" . $row['ship_id'] . "' onclick='return confirm(\"Are you sure you want to delete this item?\")'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }    
    ?>
     <h1 class="header"><br>Customer</h1>
    <form action="customer_info.php" method="POST">
    <div class="seachBtn"><input type="submit" id="search-Btn" name="search" value="Add"></div>
    </form>
    <?php
        include("config.php");
        $sql = "SELECT * FROM customer_info";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Customer ID</th><th>Customer Name</th><th>Customer Address</th><th>Mobile Number</th><th>Potal Code</th><th>Email Address</th><th>Country</th><th>Shipment ID</th><th>Modify</th>";
            echo "</tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['customer_id'] . "</td>";
                echo "<td>" . $row['customer_name'] . "</td>";
                echo "<td>" . $row['customer_address'] . "</td>";
                echo "<td>" . $row['customer_number'] . "</td>";
                echo "<td>" . $row['customer_postal'] . "</td>";
                echo "<td>" . $row['customer_email'] . "</td>";
                echo "<td>" . $row['customer_country'] . "</td>";
                echo "<td>" . $row['ship_id'] . "</td>";
                echo "<td>";
                echo "<a href='edit.php?id=" . $row['customer_id'] . "'>Edit</a> | ";
                echo "<a href='deleteCustomer.php?id=" . $row['customer_id'] . "' onclick='return confirm(\"Are you sure you want to delete this item?\")'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }    
    ?>


     <h1 class="header"><br>Completed</h1>
    <form action="completed.php" method="POST">
    <div class="seachBtn"><input type="submit" id="search-Btn" name="search" value="Add"></div>
    </form>
    <?php
        include("config.php");
        $sql = "SELECT * FROM completed";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Customer ID</th><th>Ship ID</th><th>Date Arrive</th><th>Modify</th>";
            echo "</tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['customer_id'] . "</td>";
                echo "<td>" . $row['ship_id'] . "</td>";
                echo "<td>" . $row['date_arrive'] . "</td>";
                echo "<td>";
                echo "<a href='edit.php?id=" . $row['customer_id'] . "'>Edit</a> | ";
                echo "<a href='deleteCustomer.php?id=" . $row['customer_id'] . "' onclick='return confirm(\"Are you sure you want to delete this item?\")'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }    
    ?>
</body>
</html>
