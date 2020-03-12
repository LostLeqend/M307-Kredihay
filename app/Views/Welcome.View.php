<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Kredihay</title>
        <link rel="icon" href="res/Kredithay.png">
        <link rel="stylesheet" href="public/css/app.css">
    </head>
    <body>
        <h1><a href="Home">Kredihay</a></h1>

        <h2>Kreditverleih</h2>

        <table id="creditTable">
            <tr>
                <th class="tableTitle">Name</th>
                <th class="tableTitle">Kreditart</th>
                <th class="tableTitle">Zahlungsfrist</th>
                <th class="tableTitle">Status</th>
                <th class="tableTitle">Bearbeiten</th>
            </tr>
            <?php foreach($creditLoans as $credit){
                if($credit->fk_statusId == 1) { 
                    $emoji = ($credit->deadline >= date("Y-m-d") ? '🌞' : '⚡');?>
                    <tr class="item">
                        <td class="column"><?= $credit->firstname . ' ' . $credit->lastname ?></td>
                        <td class="column"><?= $credit->creditdeal ?></td>
                        <td class="column"><?= $credit->deadline ?></td>
                        <td class="column" id="status"><?= $emoji ?></td>
                        <td class="column"><button class="btnEdit" onclick="editCreditLoan(<?= $credit->creditId ?>)"><img src="res/Icons.16/edit.png" alt="edit"></button></td>
                    </tr>
                <?php }
            } ?>

            <script>
                function editCreditLoan(creditId) {
                    let form = document.createElement('form');
                    document.body.appendChild(form);
                    form.method = 'post';
                    form.action = 'EditCreditLoan';

                    let input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'creditId';
                    input.value = creditId;
                    form.appendChild(input);

                    form.submit();
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
