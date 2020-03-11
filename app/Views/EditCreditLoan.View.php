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
            <div class="input-set">
                <label for="firstname">Vorname*</label>
                <input id="firstname" name="firstname" type="text" required>
            </div>

            <div class="input-set">
                <label for="lastname">Nachname*</label>
                <input id="lastname" name="lastname" type="text" required>
            </div>

            <div class="input-set">
                <label for="telefon">Telefon</label>
                <input id="telefon" name="telefon" type="text">
            </div>

            <div class="input-set">
                <label for="email">Email*</label>
                <input id="email" name="email" type="text" required>
            </div>

            <div class="input-set">
                <label for="ratesCount">Anzahl Raten*</label>
                <input id="ratesCount" name="ratesCount" type="number" min="1" max="10" required>
            </div>

            <div class="input-set">
                <label for="creditdeals">Kreditpaket</label>
                <select id="creditdeals">
                    <?php foreach($creditdeals as $creditDeal) { ?>
                        <option value="<?php $creditDeal['creditdealDescription'] ?>"><?= $creditDeal['creditdealDescription'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="input-set">
                <label for="deadline">Zahlungsfrist</label>
                <input id="deadline" name="deadline" type="datetime-local" readonly>
            </div>

            <button formaction="NewCreditLoanValidation" formmethod="post">Erstellen</button>
        </form>
    </body>
</html>
