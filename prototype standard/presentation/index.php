<?php
require_once "../business/promotionBLL.php";

$promotionBAL = new promotionBLL();

$data = $promotionBAL->getAllPromotions();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotion management</title>
</head>
<body>
    <div>
        <a href="addPromotion.php">Ajouter promotion</a>
        <table>
            <tr>
                <th>Nom promotion</th>
            </tr>

            <?php
                    foreach($data as $promotion){
            ?>

            <tr>
                <td><?= $promotion->getName()?></td>
                <td>
                    <a href="deletePromotion.php?id=<?php echo $promotion->getId() ?>">Supprimer</a>
                    <a href="updatePromotion.php?id=<?php echo $promotion->getId() ?>">Modifier</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>