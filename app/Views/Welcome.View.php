<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Kredihay</title>
        <link rel="icon" href="res/Kredithay.png">
        <link rel="stylesheet" href="public/css/app.css">
    </head>
    <body>
        <h1>Kredihay</h1>

        <h2>Kreditverleih</h2>

        <table id="creditTable">
            <tr>
                <th class="tableTitle">Name</th>
                <th class="tableTitle">Kreditart</th>
                <th class="tableTitle">Zahlungsfrist</th>
                <th class="tableTitle">Status</th>
                <th class="tableTitle">Bearbeiten</th>
            </tr>
            <?php foreach($creditLoans as $credit){ ?>
                <tr class="item">
                    <td class="column"><?= $credit->firstname . ' ' . $credit->lastname ?></td>
                    <td class="column"><?= $credit->creditdeal ?></td>
                    <td class="column"><?= $credit->deadline ?></td>
                    <td class="column"><?= $credit->status ?></td>
                    <td class="column"><button class="btnEdit" onclick="editCreditLoan()"><img src="res/Icons.16/edit.png"></button></td>
                </tr>
            <?php } ?>

            <script>
                function editCreditLoan() {
                    window.location = 'EditCreditLoan';
                }
            </script>
        </table>

        <button onclick="createCreditLoan()">Create</button>

        <script>
            function createCreditLoan() {
                window.location = 'CreateCreditLoan';
            }
        </script>

    </body>
</html>
