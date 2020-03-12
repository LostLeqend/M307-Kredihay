<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/WelcomeController.php',
    'Home' => 'app/Controllers/WelcomeController.php',
    'CreateCreditLoan' => "app/Controllers/NewCreditLoanController.php",
    'EditCreditLoan' => "app/Controllers/EditCreditLoanController.php",
]);