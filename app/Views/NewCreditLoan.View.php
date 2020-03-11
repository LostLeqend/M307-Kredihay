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
                <input id="email" name="email" type="email" required>
            </div>

            <div class="input-set">
                <label for="ratesCount">Anzahl Raten*</label>
                <input id="ratesCount" name="ratesCount" type="number" value="1" min="1" max="10" required onchange="calculateDeadline()">
            </div>

            <div class="input-set">
                <label for="creditDeals">Kreditpaket</label>
                <select name="creditDeals"  id="creditDeals">
                    <?php foreach($creditDeals as $creditDeal) { ?>
                        <option value="<?= $creditDeal->creditdealId ?>"><?= $creditDeal->creditdealDescription ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="input-set">
                <label for="deadline">Zahlungsfrist</label>
                <input id="deadline" name="deadline" type="date" readonly>
            </div>

            <script type="text/javascript">
                document.addEventListener("DOMContentLoaded", function(event) {
                    calculateDeadline();
                });

                function calculateDeadline(){
                    let count = document.getElementById('ratesCount').value;

                    if(count != null) {
                        let deadline = new Date();
                        let days = count * 15;
                        deadline.setDate(deadline.getDate() + days);

                        let day = deadline.getDate();
                        if(day < 10)
                            day = '0' + day;
                        let month = deadline.getMonth() + 1;
                        if(month < 10)
                            month = '0' + month;
                        let year = deadline.getFullYear();

                        document.getElementById("deadline").value = year + '-' + month + '-' + day;
                    }
                }
            </script>

            <button formaction="NewCreditLoanValidation" formmethod="post">Erstellen</button>
        </form>
    </body>
</html>
