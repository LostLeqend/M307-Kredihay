<?php
    require_once "app/Model/Creditloan.php";
   
    $creditLoans = Creditloan::getAll();

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        foreach($_POST as &$creditId){
            $credit = Creditloan::getById($creditId);
            $credit->closeCredit();
        }
    }
    require 'app/Views/Welcome.View.php';