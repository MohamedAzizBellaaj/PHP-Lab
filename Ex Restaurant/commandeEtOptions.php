<!-- //? Ce code nous permet de générer tout les commandes avec leurs options -->
<tr>
    <td>Commande: </td>
    <?php for ($i = 0; $i < $_POST["nbSandwichs"]; $i++) {?>
    <td><?php
echo $_POST["type{$i}"], " ";
    if (isset($_POST["harissa{$i}"])) {
        echo $_POST["harissa{$i}"], " ";
    }

    if (isset($_POST["salade{$i}"])) {
        echo $_POST["salade{$i}"], " ";
    }

    if (isset($_POST["mayo{$i}"])) {
        echo $_POST["mayo{$i}"], " ";
    }

    if (!(isset($_POST["harissa{$i}"]) || isset($_POST["salade{$i}"]) || isset($_POST["mayo{$i}"]))) {
        echo "sans options";
    }
    ?></td>
<tr>
    <td></td>


    <?php
}?>
    <td></td>
</tr>