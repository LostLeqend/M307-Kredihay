<?php
require_once "app/Model/Creditloan.php";
    $creditloan = new Creditloan(null, "Janis", "Kneubühler", "janis.kne@gmail.com", "079 105 31 78", 4, "2020-05-06", 12, 1);
    $creditloan->create();
?>