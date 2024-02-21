<?php
require_once("connect.php");

if(isset($_POST['getInfoResponsible'])){
    getInfo($db);
}

function getInfo($db){
    $id = $_POST['id'];
    
    $sql = "SELECT * FROM `workers` WHERE `id` = '$id'";
    $query = mysqli_query($db, $sql);
    $worker = mysqli_fetch_assoc($query);
    $response = json_encode($worker);
    
    print_r($response);
}