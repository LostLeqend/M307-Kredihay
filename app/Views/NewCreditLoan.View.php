<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Kredihay</title>
        <link rel="icon" href="res/kredithay.png">
        <link rel="stylesheet" href="public/css/app.css">
    </head>
    <body>
        <h1>Kredihay</h1>

        <h2>Neuer Kreditverleih</h2>

        <form>
            <label for="firstname">Vorname*</label>
            <input id="firstname" name="firstname" type="text" required>

            <label for="firstname">Vorname*</label>
            <input id="firstname" name="firstname" type="text" required>

            <br>

            <label for="telefon">Telefon</label>
            <input id="telefon" name="telefon" type="text">

            <br>

            <label for="email">Email*</label>
            <input id="email" name="email" type="text" required>

            <br>

            <label for="ratesCount">Anzahl Raten*</label>
            <input id="ratesCount" name="ratesCount" type="number" min="1" max="10" required>

            <br>

            <label for="creditdeals">Kreditpaket</label>
            <select id="creditdeals">
                <?php foreach($creditdeals as $creditDeal) { ?>
                    <option value="<?php $creditDeal['creditdealDescription'] ?>"><?= $creditDeal['creditdealDescription'] ?></option>
                <?php } ?>
            </select>

            <br>

            <label for="deadline">Zahlungsfrist</label>
            <input id="deadline" name="deadline" type="date" readonly>

            <br>

            <button formaction="NewCreditLoanValidation" formmethod="post">Erstellen</button>
        </form>
    </body>
</html>
