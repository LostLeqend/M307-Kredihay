<?php
    $creditDeals = Creditdeal::getAll();
    $statuses = Status::getAll();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['creditId'])){
            $_CreditId = $_POST['creditId'];
            if(isset($_CreditId)) {
                $creditloan = Creditloan::getById($_CreditId);
                require "app/Views/EditCreditLoan.View.php";
            }
        }
        else {
            $_firstname = $_POST['firstname'];
            $_lastname = $_POST['lastname'];
            $_phone = $_POST['telefon'];
            $_email = $_POST['email'];
            $_ratesCount = $_POST['ratesCount'];
            $_deadline = $_POST['deadline'];
            $_creditDeals = $_POST['creditDeals'];
            $_status = $_POST['status'];
            $_creditId = $_POST['updateCreditId'];

            $creditloan = new Creditloan($_creditId, $_firstname, $_lastname, $_email, $_phone, $_ratesCount, $_deadline, $_creditDeals, $_status);

            $errors[] = ValidateCreditloan::validate($creditloan);

            if(!isset($errors)) {
                $creditloan->update();
                header('Location: http://localhost/M307-Kredihay');
            } else {
                require "app/Views/EditCreditLoan.View.php";
            }
        }
    }

