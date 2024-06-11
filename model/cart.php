<?php

function insert_cart($name,$price,$image,$quantity){
    $sql = "INSERT INTO cart(name,price,image,quantity) VALUES ('$name','$image','$price',$quantity)";
    pdo_execute($sql);
}

?>