<?php
    require_once "app/Model/Creditdeal.php";

    $creditDeals = Creditdeal::getAll();

    require "app/Views/NewCreditLoan.View.php";
    function calculateDeadline($ratesCount) {
        return date('Y-m-d', strtotime('+' . ($ratesCount * 15) . 'day'));
    }
