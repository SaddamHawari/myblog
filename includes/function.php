<?php

function getCategory($db,$id){
    $query="SELECT * FROM category WHERE id=$id";
    $run=mysqli_query($db,$query);
    $data=mysqli_fetch_assoc($run);
    return $data['name'];

}
