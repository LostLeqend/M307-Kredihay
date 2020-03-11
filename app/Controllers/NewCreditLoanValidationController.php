<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $creditloan = new Creditloan(null, "Janis","Kneubühler", false, "janis.kne@gmail.com", "079 105 31 78", 4, "2020-05-06", 12, 1);
    $creditloan->create();

    //header('Location: creditloan'); // Besser: header('Location: http://localhost/deinProjekt/task);
}
?>