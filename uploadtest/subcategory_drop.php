<?php
    $categoryid = $_REQUEST['cid'];

    include ('../connection.php');

    $subcategory_sql = "SELECT subcategoryID, subcategoryName FROM subcategory WHERE categoryID = $categoryid";
    $subcategory_result = mysqli_query($conn, $subcategory_sql);
    $subcategory_arr = mysqli_fetch_all($subcategory_result);

    for ($i = 0; $i < count($subcategory_arr); $i++) {
        echo "<input type='button' class='dropdown-item' value='".$subcategory_arr[$i][1]."' onclick='subcategory(".$subcategory_arr[$i][0].", this.value)'>";
    }
?>