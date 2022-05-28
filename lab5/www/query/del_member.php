<?php
require "../funtion/condb.php";

$id =  $_GET["id"];

try{
    $sql = "DELETE FROM tb_member WHERE id = '$id' ";
    $mysqli->query($sql);
}
catch(Exception $e){
    echo $e->getMessage();
}