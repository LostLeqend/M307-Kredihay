<?php

class ValidateCreditloan
{
    static function validate($creditloan) {
        $errors = [];
        if(!isset($creditloan->firstname)) {
            array_push($errors, "Vorname darf nicht leer sein!");
        }
        if(!isset($creditloan->lastname)) {
            array_push($errors, "Nachname darf nicht leer sein!");
        }
        if(!isset($creditloan->email)) {
            array_push($errors, "Email darf nicht leer sein!");
        }
        if(!isset($creditloan->creditDeal)) {
            array_push($errors, "Kredit Packet darf nicht leer sein!");
        }
        if (!strpos($creditloan->email, '@') == false) {
            array_push($errors, "Emailaddresse muss ein @-Zeichen enthalten!");
        }
        if (!preg_match('/^[-\+ 0-9]+$/', $creditloan->phone)) {
            array_push($errors, "Telefonnummer darf nur Zahlen und die Zeichen +/- enthalten!");
        }
        if(!isset($creditloan->countOfRates) || $creditloan->countOfRates > 10 || $creditloan->countOfRates < 1) {
            array_push($errors, "Anzahl Raten muss zwischen 1 und 10 liegen!");
        }
        return $errors;
    }
}
