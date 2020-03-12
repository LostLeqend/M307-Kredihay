<?php
    $creditDeals = Creditdeal::getAll();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $_CreditId = $_POST['creditId'];

        if(isset($_CreditId)) {
            $creditLoan = Creditloan::getById($_CreditId);
            require "app/Views/EditCreditLoan.View.php";
        }
    }
    else {
        //If $errors = validate($creditloan)
        if (false) {
            $creditloan->create();
            header('Location: http://localhost/M307-Kredihay');
        } else {
            require "app/Views/EditCreditLoan.View.php";
        }
    }

