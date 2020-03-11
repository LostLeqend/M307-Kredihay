<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        var_dump($_POST);
        require "app/Views/EditCreditLoan.View.php";
    }
