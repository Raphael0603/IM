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
        $productId = $_GET['id'];

        // Fetch the product from the database based on the product ID
        $sql = "SELECT * FROM product WHERE prod_id = $productId";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $prodId = $row['prod_id'];
            $prodName = $row['prod_name'];
            $prodDesc = $row['prod_desc'];

            // Display the edit form with pre-filled values
            echo "
            <form action='update.php' method='POST'>
                <input type='hidden' name='prod_id' value='$prodId'>
                <label for='prod_name'>Product Name:</label>
                <input type='text' id='prod_name' name='prod_name' value='$prodName' required><br>
                <label for='prod_desc'>Product Description:</label>
                <input type='text' id='prod_desc' name='prod_desc' value='$prodDesc' required><br>
                <input type='submit' name='submit' value='Update'>
                
            </form>";
        } else {
            echo "Product not found.";
        }
    } else {
        echo "Invalid request.";
    }
?>
<?php
        include("config.php");
        $sql = "SELECT * FROM product";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Product ID</th><th>Product Name</th><th>Product Description</th><th>Price</th>";
            echo "</tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['prod_id'] . "</td>";
                echo "<td>" . $row['prod_name'] . "</td>";
                echo "<td>" . $row['prod_desc'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
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
