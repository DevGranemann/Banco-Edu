<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Edu</title>
</head>
<body>
    <h1>Abra sua Conta no Banco Edu</h1>
    <pre>
        <?php
        
            require_once 'classConta.php';

            $conta1 = new Conta;
            $conta1->abrirConta("CC");

            $conta1->depositar(100);
            $conta1->pagarMensal();

            print "<br><br>";

            print_r($conta1);
        ?>
    </pre>
</body>
</html>