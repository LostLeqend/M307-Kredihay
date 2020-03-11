<?php
    $creditOne = [
        "firstname" => "Janis",
        "lastname" => "Kneubühler",
        "creditType" => "gold",
        "deadline" => '2020-10-07',
        "status" => "open"
    ];

    $creditTwo = [
        "firstname" => "Raphael",
        "lastname" => "Härtel",
        "creditType" => "gold",
        "deadline" => '2020-10-07',
        "status" => "open"
    ];

    $creditLoans = [
        $creditOne,
        $creditTwo
    ];

    require 'app/Views/Welcome.View.php';