<?php$con = require "database.php";$sql = "select *from product";$result = $con->query($sql);$i=0;$a = [];if ($result->num_rows>0){    while ($row = $result->fetch_assoc()){        $a[$i++] = $row;    }}$con->close();include "header.php";?><div class="container">    <div class="row">      <?php         foreach ($a as $item){            echo '<div class="col-md-4 my-3">';            echo  '<div class="card">';             echo   '<div class="card-header">';             echo "<img width=300 src=".$item['image']."/>";              echo   '</div>';                echo  '<div class="card-body">';                   echo "<h2>".$item['name']."</h2>";                   echo  "<h3>".$item['price']."</h3>";                echo " </div>";             echo "</div>";        echo "</div>";         }      ?>    </div></div></body></html>