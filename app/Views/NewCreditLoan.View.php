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

        <h2>Kreditverleih</h2>

        <button onclick="CreateCreditLoan()">Erstellen</button>

        <script>
            function CreateCreditLoan() {
                window.location = 'NewCreditLoanValidation';
            }
        </script>
    </body>
</html>
