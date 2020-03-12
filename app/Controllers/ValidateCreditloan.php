<?php

class ValidateCreditloan
{
    static function validate($creditloan) {
        $errors = [];
        if(strlen($creditloan->firstname) < 1) {
            array_push($errors, "Vorname darf nicht leer sein!");
        }
        if(strlen($creditloan->lastname) < 1) {
            array_push($errors, "Nachname darf nicht leer sein!");
        }
        if(strlen($creditloan->email) < 1) {
            array_push($errors, "Email darf nicht leer sein!");
        }
        if(strlen($creditloan->fk_creditdealsId) < 1) {
            array_push($errors, "Kredit Packet darf nicht leer sein!");
        }
        if (!strpos($creditloan->email, '@')) {
            array_push($errors, "Emailaddresse muss ein @-Zeichen enthalten!");
        }
        if (preg_replace("/[^\+\-\ 0-9]/", '', $creditloan->phone) != $creditloan->phone) {
            array_push($errors, "Telefonnummer darf nur Zahlen und die Zeichen +/- enthalten!");
        }
        if(strlen($creditloan->countOfRates) < 1 || $creditloan->countOfRates > 10 || $creditloan->countOfRates < 1) {
            array_push($errors, "Anzahl Raten muss zwischen 1 und 10 liegen!");
        }
        return $errors;
    }
}
