<?php
  $customer = $_GET["customer"];
  $address = $_GET["address"];
  $phone = $_GET["phone"];
  $amount = $_GET["amount"];

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Honey Order receipt</title>
  </head>
  <body>
<p>This is to confirm your order of <?php echo $amount; ?> jars of honey.</p>

<p>To be sent to: <br>
 <?php echo $customer; ?></p>
 <p><?php echo $address; ?></p>
 <p><?php echo $phone; ?></p>
  </body>
</html>
