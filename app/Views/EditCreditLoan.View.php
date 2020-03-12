<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Kredihay</title>
        <link rel="icon" href="res/kredithay.png">
        <link rel="stylesheet" href="public/css/app.css">
    </head>
    <body>
        <h1><a href="Home">Kredihay</a></h1>

        <h2>Kreditverleih bearbeiten</h2>

        <form>
            <div class="input-set">
                <label for="firstname">Vorname</label>
                <input id="firstname" name="firstname" type="text" value="<?= $creditLoan->firstname ?>" required>
            </div>

            <div class="input-set">
                <label for="lastname">Nachname</label>
                <input id="lastname" name="lastname" type="text" value="<?= $creditLoan->lastname ?>" required>
            </div>

            <div class="input-set">
                <label for="telefon">Telefon</label>
                <input id="telefon" name="telefon" value="<?= $creditLoan->phone ?>" type="text">
            </div>

            <div class="input-set">
                <label for="email">Email</label>
                <input id="email" name="email" type="text" value="<?= $creditLoan->email ?>" required>
            </div>

            <div class="input-set">
                <label for="ratesCount">Anzahl Raten</label>
                <input id="ratesCount" name="ratesCount" type="number" value="<?= $creditLoan->countOfRates ?>" readonly>
            </div>

            <div class="input-set">
                <label for="deadline">Zahlungsfrist</label>
                <input id="deadline" name="deadline" type="datetime-local" value="<?= $creditLoan->deadline ?>" readonly>
            </div>

            <div class="input-set">
                <label for="creditDeals">Kreditpaket</label>
                <select name="creditDeals"  id="creditDeals" selected="<?= $creditLoan->creditdealId ?>">
                    <?php foreach($creditDeals as $creditDeal) { ?>
                        <option value="<?= $creditDeal->creditdealId ?>"><?= $creditDeal->creditdealDescription ?></option>
                    <?php } ?>
                </select>
            </div>

            <button formaction="EditCreditLoan" formmethod="post">Erstellen</button>
        </form>
    </body>
</html>
