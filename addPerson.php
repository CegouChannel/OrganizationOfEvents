<?php
require_once("connect.php");

if(isset($_POST["add_person"])){
    addPerson($db);
}

function addPerson($db){
    $fio = $_POST['fio'];
    $brd = $_POST['brd'];
    $special = $_POST['special'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO `workers`(`id`, `fio`, `brd`, `special`, `phone`) VALUES (NULL, '$fio','$brd','$special','$phone')";
    mysqli_query($db, $sql);
    header("Location: people.php");
    
}