<?php
    require_once "app/Model/Creditloan.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        foreach($_POST as &$creditId){
            $credit = Creditloan::getById($creditId);
            $credit->closeCredit();
        }
    }

    $creditLoans = Creditloan::getAll();

    require 'app/Views/Welcome.View.php';