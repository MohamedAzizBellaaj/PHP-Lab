<!-- //? Ce code nous permet de calculer et d'afficher le prix total de la commande et le montant final à payer -->
<tr>
    <td>Prix Unitaire: </td>
    <td>4 Dt</td>
</tr>
<tr>
    <td>Prix Total: </td>
    <td><?php
$total = $_POST["nbSandwichs"] * 4;
echo $total, " Dt"?></td>
</tr>
<tr>
    <td>
        Remise:
    </td>
    <td>
        <?php
$remise = ($_POST["nbSandwichs"] >= 10) ? $total * 0.1 : 0;
echo $remise, " Dt"?></td>
</tr>
<tr>
    <td>Montant à payer:</td>
    <td><?=$total - $remise, " Dt"?></td>
</tr>