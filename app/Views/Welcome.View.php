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
                <th class="title">Name</th>
                <th class="title">Kreditart</th>
                <th class="title">Zahlungsfrist</th>
                <th class="title">Status</th>
                <th class="title">Bearbeiten</th>
            </tr>

            <?php foreach($creditLoans as $credit){ ?>
                <tr class="item">
                    <th class="column"><?= $credit['firstname'] . ' ' . $credit['lastname'] ?></th>
                    <th class="column"><?= $credit['creditType'] ?></th>
                    <th class="column"><?= $credit['deadline'] ?></th>
                    <th class="column"><?= $credit['status'] ?></th>
                    <th class="column"><button onclick="editCreditLoan()">Edit</button></th>
                </tr>
            <?php } ?>

            <script>
                function editCreditLoan() {
                    window.location = 'editCreditLoan';
                }
            </script>
        </table>

    <button onclick="createCreditLoan()">Create</button>

        <script>
            function createCreditLoan() {
                window.location = 'createCreditLoan';
            }
        </script>

    </body>
</html>
