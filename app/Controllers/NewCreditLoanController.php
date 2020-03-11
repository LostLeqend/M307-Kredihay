<?php
    //require_once "app/Models/Creditdeal.php";
    //$creditdeals = new Creditdeal();
    $creditDealOpen = [ 'id' => '0', 'creditdealDescription' => 'Offen'];
    $creditDealClosed = [ 'id' => '1', 'creditdealDescription' => 'Geschlossen'];
    $creditdeals = [$creditDealOpen, $creditDealClosed];
    echo calculateDeadline(3);
    require "app/Views/NewCreditLoan.View.php";
    function calculateDeadline($ratesCount) {
        return date('Y-m-d', strtotime('+' . ($ratesCount * 15) . 'day'));
    }
