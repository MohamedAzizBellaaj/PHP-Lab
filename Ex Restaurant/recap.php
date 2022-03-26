<?php include_once './XSSProtection.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulaif</title>
    <link rel="stylesheet" href="./node_modules/bootswatch/dist/minty/bootstrap.css" />
</head>

<body>

    <div class="container">
        <table class="table">
            <tr>
                <td>
                    Nom:
                </td>
                <td><?=$_POST["nom"]?></td>
            </tr>
            <tr>
                <td>Prenom:</td>
                <td><?=$_POST["prenom"]?></td>
            </tr>
            <tr>
                <td>Nombre de sandwichs: </td>
                <td><?=$_POST["nbSandwichs"]?></td>
            </tr>
            <tr>
                <td>Adresse: </td>
                <td><?=$_POST["adresse"]?></td>
            </tr>
            <?php
include_once "commandeEtOptions.php";
include_once "calculMontant.php"
?>

        </table>
    </div>
</body>
<?php
    include_once "./fileHandler.php";
?>

</html>