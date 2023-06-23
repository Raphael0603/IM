<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1>Add to Customer table</h1>
<form action="customersave.php" method="POST">
        <div class="prod_id">Customer ID: <input type="text" id="prod_id" name="customer_id" placeholder="Customer ID"required><br></div>
        <div class="prod_name">Customer Name: <input type="text" id="prod_name" name="customer_name" placeholder="Customer Name"required><br></div>
        <div class="prod_desc">Customer Address: <input type="text" id="prod_desc" name="customer_address" placeholder="Customer Address"required><br></div>
        <div class="prod_desc">Customer Number: <input type="text" id="prod_desc" name="customer_number" placeholder="Customer Number"required><br></div>
        <div class="prod_desc">Customer Postal: <input type="text" id="prod_desc" name="customer_postal" placeholder="Customer Postal"required><br></div>
        <div class="prod_desc">Customer Email: <input type="text" id="prod_desc" name="customer_email" placeholder="Customer Email"required><br></div>
        <div class="prod_desc">Customer Country: <input type="text" id="prod_desc" name="customer_country" placeholder="Customer Country"required><br></div>
        <div class="prod_id">Shipment ID: <input type="text" id="prod_id" name="ship_id" placeholder="Shipment ID" required><br></div>
        <div class="subBtn"><input type="submit" id="AddBtn" name="submit" value="ADD DATA"></div>
    </form>
    <form method="POST" action="index.php">
        <div class="backBtn"><input type="submit" id="BACKbtn" name="search" value="BACK"></div>
    </form>
</body>
</html>