<?php
    require_once "app/Model/Creditloan.php";
   
    $creditLoans = Creditloan::getAll();

    require 'app/Views/Welcome.View.php';