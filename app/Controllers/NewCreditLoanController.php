<?php
    require_once "app/Model/Creditdeal.php";

    $creditDeals = Creditdeal::getAll();

    require "app/Views/NewCreditLoan.View.php";
