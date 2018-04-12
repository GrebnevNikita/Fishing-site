    <?php
include_once "config.php"; 
include_once "header.php"; 
?>
<?php

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 

$sql = "SELECT  name, description, price, count, img_path FROM catalog";
$result = $link->query($sql);


if ($result->num_rows > 0) {

echo "<div class=\"row\">";

    while($row = $result->fetch_assoc()) {
    	echo "<div class=\"col-md-4 col-sm-6\">";

     echo "<div class=\"entity\">
            <div class=\"image\"><img src=\"/img/". $row["img_path"]."\"></div>
            <div class=\"name\">". $row["name"]."</div>
            <div class=\"description\">". $row["description"]."</div>
            <div class=\"price\">". $row["price"]."</div>
            <div class=\"count\">". $row["count"]."</div>
        </div>";
        echo "</div>";
    }
echo "</div";
} else {
    echo "Поиск не дал результатов";
}
$link->close();
?>
   <?php
include_once "footer.php"; 
?>