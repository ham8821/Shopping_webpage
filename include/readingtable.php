<?php
session_start();
require_once("connect.php");

$ReadSql ="SELECT * from user";
$res = mysqli_query($connection,$ReadSql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>
    <h1>READ DATABASE</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">userID</th>
      <th scope="col">name</th>
      <th scope="col">email<th>
      <th scope="col">address</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    while($r=mysqli_fetch_assoc($res)):?>

            <tr>
            <th >#</th>
            <td><?php echo $r['lastName']?></td>
            <td><?php echo $r['email']?></td>
            <td><?php echo $r['address']?></td>
            </tr>
  <?php endwhile ?>

  </tbody>
</table>


    <script  src="main.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>