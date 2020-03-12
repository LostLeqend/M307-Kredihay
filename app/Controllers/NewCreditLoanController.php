<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $_firstname = $_POST['firstname'];
        $_lastname = $_POST['lastname'];
        $_phone = $_POST['telefon'];
        $_email = $_POST['email'];
        $_ratesCount = $_POST['ratesCount'];
        $_deadline = $_POST['deadline'];
        $_creditDeals = $_POST['creditDeals'];

        $creditloan = new Creditloan(null, $_firstname, $_lastname, $_email, $_phone, $_ratesCount, $_deadline, $_creditDeals, 1);
        $hasStartedYet = true;

        $creditloan->create();
        header('Location: http://localhost/M307-Kredihay');
    }
    else{
        $hasStartedYet = false;
        $creditloan = new Creditloan(null, '', '', '', '', 1, '', '', 1);
    }
    $errors = ValidateCreditloan::validate($creditloan);
    if(count($errors) == 0) {
        $creditloan->create();
        header('Location: http://localhost/M307-Kredihay');
    }
    else {
        $creditDeals = Creditdeal::getAll();
        require "app/Views/NewCreditLoan.View.php";
    }