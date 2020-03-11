<?php
require_once "app/Model/Creditloan.php";
    $creditOne = [
        "firstname" => "Janis",
        "lastname" => "Kneubühler",
        "creditdealDescription" => "gold",
        "deadline" => '2020-10-07',
        "statusDescription" => "open"
    ];

    $creditTwo = [
        "firstname" => "Raphael",
        "lastname" => "Härtel",
        "creditdealDescription" => "gold",
        "deadline" => '2020-10-07',
        "statusDescription" => "open"
    ];
    
    //$_creditLoans = Creditloan::getAll();

    $creditLoans = [
        $creditOne,
        $creditTwo
    ];

    require 'app/Views/Welcome.View.php';