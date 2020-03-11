<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/WelcomeController.php',
    'createCreditLoan' => "app/Controllers/NewCreditLoanController.php",
    'editCreditLoan' => "app/Controllers/EditCreditLoanController.php",
    'newCreditLoanValidation' => "app/Controllers/NewCreditLoanValidationController.php"
]);