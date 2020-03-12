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
                <input id="firstname" name="firstname" type="text" value="<?= $creditloan->firstname ?>" required>
            </div>

            <div class="input-set">
                <label for="lastname">Nachname</label>
                <input id="lastname" name="lastname" type="text" value="<?= $creditloan->lastname ?>" required>
            </div>

            <div class="input-set">
                <label for="telefon">Telefon</label>
                <input id="telefon" name="telefon" value="<?= $creditloan->phone ?>" type="text">
            </div>

            <div class="input-set">
                <label for="email">Email</label>
                <input id="email" name="email" type="text" value="<?= $creditloan->email ?>" required>
            </div>

            <div class="input-set">
                <label for="ratesCount">Anzahl Raten</label>
                <input id="ratesCount" name="ratesCount" type="number" value="<?= $creditloan->countOfRates ?>" readonly>
            </div>

            <div class="input-set">
                <label for="deadline">Zahlungsfrist</label>
                <input id="deadline" name="deadline" type="datetime-local" value="<?= $creditloan->deadline ?>" readonly>
            </div>

            <div class="input-set">
                <label for="creditDeals">Kreditpaket</label>
                <select name="creditDeals"  id="creditDeals" >
                    <?php foreach($creditDeals as $creditDeal) {
                        if($creditDeal->creditdealId != $creditloan->fk_creditdealsId) { ?>
                            <option value="<?= $creditDeal->creditdealId ?>"><?= $creditDeal->creditdealDescription ?></option>
                        <?php }
                        else { ?>
                            <option selected value="<?= $creditDeal->creditdealId ?>"><?= $creditDeal->creditdealDescription ?></option>
                        <?php }
                    } ?>

                </select>
            </div>

            <div class="input-set">
                <label for="status">Status</label>
                <select name="status"  id="status" >
                    <?php foreach($statuses as $status) { ?>
                            <option value="<?= $status->statusId ?>"><?= $status->statusDescription ?></option>
                    <?php } ?>
                </select>
            </div>

            <input hidden name="updateCreditId" value="<?= $creditloan->creditId ?>">
            <button formaction="EditCreditLoan" formmethod="post">Speichern</button>
        </form>
    </body>
</html>
