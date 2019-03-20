<?php
session_start();
include('database_connection.php');
$query = "SELECT `postDate`, `productName`, `sellerID`,`Price`,`state` FROM `products` ORDER BY postDate DESC";
//$result = $connect->select($query);
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

$products_list =  '<ul class="products-wrp">';
while($row = $result->fetch_assoc()) {
$products_list .= <<<EOT

<li>

<form class="form-item">
<h4>{$row["product_name"]}</h4>
<div><img src="images/{$row["product_image"]}"></div>
<div>Price : {$currency} {$row["product_price"]}<div>
<div class="item-box">
    <div>
  Color :
  lo
    <select name="product_color">
    <option value="Red">Red</option>
    <option value="Blue">Blue</option>
    <option value="Orange">Orange</option>
    </select>
	</div><div>
    Qty :
    <select name="product_qty">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select>
	</div><div>
    Size :
    <select name="product_size">
	<option value="M">M</option>
    <option value="XL">XL</option>
    <option value="XXL">XLL</option>
    </select>

	</div>
	
    <input name="product_code" type="hidden" value="{$row["product_code"]}">
    <button type="submit">Add to Cart</button>
</div>
</form>
</li>
EOT;

}
$products_list .= '</ul></div>';
echo $products_list;

// echo "<table>";
//  echo "<tr>";
//     echo "<th>Name </th>";
//     echo "<th>Price </th>";
//     echo "<th>User </th>";
//     echo "<th>Posting date </th>";
//  echo "</tr>";
//  while($row = mysqli_fetch_array($result)) 
//  {
//     echo "<tr>";
//     echo "<td> $row['productName']</td>";
//     echo "<td> $row['Price']</td>";
//     echo "<td> $row['sellerID']</td>";
//     echo "<td> $row['postDate']</td>";
//     echo "</tr>";
//  }
// echo "</table>";


// $statement = $connect->prepare($query);
// $statement->execute();
// $result = $statement->fetchAll();
// $number_of_rows = $statement->rowCount();
// $output = '';
// $output .= '
//  <table class="table table-bordered table-striped">
//     <tr>
//     <th>Sr.No</th>
//     <th>Image</th>
//     <th>Name</th>
//     <th>Price</th>
//     <th>Description</th>
//     <th>Edit</th>
//     <th>Delete</th>
//   </tr>
// ';
// if($number_of_rows > 0) {
//     $count = 0;
//     foreach($result as $row)
//     {
//     $count ++; 
//     $output .= '
//     <tr>
//       <td>'.$count.'</td>
//       <td><img src="../images/'.$row["image_name"].'" class="img-thumbnail" width="100" height="100" /></td>
//       <td>'.$row["image_name"].'</td>
//       <td>'.$row["image_price"].'</td>
//       <td>'.$row["image_description"].'</td>
//       <td><a href="edit.php?'.$row["image_id"].'"<button type="button" class="btn btn-warning btn-xs edit" id="'.$row["image_id"].'">Edit</button></td>
//       <td><button type="button" class="btn btn-danger btn-xs delete" id="'.$row["image_id"].'" data-image_name="'.$row["image_name"].'">Delete</button></td>
//     </tr>
//   ';
//  }
// }
// else
// {
//  $output .= '
//   <tr>
//    <td colspan="6" align="center">No Data Found</td>
//   </tr>
//  ';
// }
// $output .= '</table>';
// echo $output;
?>