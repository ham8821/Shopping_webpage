<?php

    include ('../connection.php');

    $category_sql = "SELECT categoryID, categoryName FROM category";
    $category_result = mysqli_query($conn, $category_sql);
    $category_arr = mysqli_fetch_all($category_result);

    for ($i = 0; $i < count($category_arr); $i++) {
        // echo $category_arr[$i][1];
        echo "<input type='button' class='dropdown-item' value='".$category_arr[$i][1]."' onclick='getsubcategory(".$category_arr[$i][0].", this.value)'>";
    }
?>