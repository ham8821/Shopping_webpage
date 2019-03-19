<?php
$db= mysqli_connect('localhost','root','','sup');

      

 $sql="INSERT INTO usercc (userID, Ccnumber, Vdate, Nameoncard, CVV)
                VALUES (22, 48789, 7897,'gigi', 456)";

        mysqli_query($db,$sql);

        ?>