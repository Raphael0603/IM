<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1>Add to Customer table</h1>
<form action="shipmentsave.php" method="POST">
        <div class="prod_id">Shipment ID: <input type="text" id="prod_id" name="ship_id" placeholder="Shipment ID"required><br></div>
        <div class="prod_name">Shipment Destination: <input type="text" id="prod_name" name="ship_destination" placeholder="Shipment Destination"required><br></div>
        <div class="prod_desc">Pack ID: <input type="text" id="prod_desc" name="pack_id" placeholder="Pack ID"required><br></div>
        <div class="prod_desc">Ship Date: <input type="text" id="prod_desc" name="ship_date" placeholder="Ship Date"required><br></div>
        <div class="subBtn"><input type="submit" id="AddBtn" name="submit" value="ADD DATA"></div>
    </form> 
    <form method="POST" action="index.php">
        <div class="backBtn"><input type="submit" id="BACKbtn" name="search" value="BACK"></div>
    </form>
</body>
</html>