<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../css/main.css">
</head>
<body>

<div class="dropdown">
  <button class="dropbtn"><b>Stocks</b></button>
  <div class="dropdown-content">
    <a href="#">Choose a stock to view:</a>
    <a href="#">AstraZeneca PLC</a>
    <a href="gsk.php">GlaxoSmithKline PLC</a>
    <a href="snn.php">Smith & Nephew PLC</a>
  </div>
</div>

<?php
  echo "test";
?>

<?php
  $output = shell_exec(escapeshellcmd("python3 ../../py/stock.py"));
  echo $output;
?>

</body>
</html>
