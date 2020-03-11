<?php
    //require_once "app/Models/Creditdeal.php";
    //$creditdeals = new Creditdeal();
    $creditDealOpen = [ 'id' => '0', 'creditdealDescription' => 'Offen'];
    $creditDealClosed = [ 'id' => '1', 'creditdealDescription' => 'Geschlossen'];
    $creditdeals = [$creditDealOpen, $creditDealClosed];
    require "app/Views/NewCreditLoan.View.php";
