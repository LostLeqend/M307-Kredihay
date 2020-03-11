<?php
require_once "app/Model/Creditloan.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_firstname = $_POST['firstname'];
    $_lastname = $_POST['lastname'];
    $_phone = $_POST['telefon'];
    $_email = $_POST['email'];
    $_ratesCount = $_POST['ratesCount'];
    //$_deadline = $_POST['deadline'];
    //$_creditdeals = $_POST['creditdeals'];
    $creditloan = new Creditloan(null, $_firstname, $_lastname, $_email, $_phone, $_ratesCount, "2020-05-06", 6, 1);
    $creditloan->create();
}  
?>