<?php
    require_once "app/Model/Creditloan.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $_firstname = $_POST['firstname'];
        $_lastname = $_POST['lastname'];
        $_phone = $_POST['telefon'];
        $_email = $_POST['email'];
        $_ratesCount = $_POST['ratesCount'];
        $_deadline = $_POST['deadline'];
        $_creditDeals = $_POST['creditDeals'];

        $creditloan = new Creditloan(null, $_firstname, $_lastname, $_email, $_phone, $_ratesCount, $_deadline, $_creditDeals, 1);
        $creditloan->create();
        header('Location: http://localhost/M307-Kredihay');

        function 
    }