<?php
require_once("connect.php");

if(isset($_POST['getAbout'])){
    getOrder($db);
}elseif(isset($_POST['actionOrder'])){
    actionOrder($db);
}

function getOrder($db){
    $id = $_POST['id'];

    $sql = "SELECT * FROM `events` WHERE `id` = '$id'";
    $query = mysqli_query($db, $sql);
    if(mysqli_num_rows($query) > 0){
        $resp = mysqli_fetch_assoc($query);
        $date = date_create($resp['date']);
        $editDate = date_format($date, 'd.m.Y');
        $order = [
            "fio" => $resp['fio'], 
            "phone" => $resp['phone'], 
            "type_event" => $resp['type_event'], 
            "date" => $editDate, 
            "script" => $resp['script']
        ];
        $response = json_encode($order);
        print_r($response);
    }else{
        $resp = "Ошибка!";
        echo $resp;
    }
}

function actionOrder($db){
    $id = $_POST['id'];
    $action = $_POST['action'];
    $responsible = $_POST['responsibleID'];

    if($action == "Принять"){
        $sql = "UPDATE `events` SET `status` = 'Принято' WHERE `id` = '$id'";
        mysqli_query($db, $sql);
        $sqlRespons = "UPDATE `events` SET `responsible` = '$responsible' WHERE `id` = '$id'";
        mysqli_query($db, $sqlRespons);
    }else if($action == "Отклонить"){
        $sql = "UPDATE `events` SET `status` = 'Отклонено' WHERE `id` = '$id'";
        mysqli_query($db, $sql);
    }
}
