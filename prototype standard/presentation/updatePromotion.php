<?php
require_once "../business/promotionBLL.php";

$promotionBAL = new promotionBLL();

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $promotion = $promotionBAL->getPromotionById($id);
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];

    $promotionBAL->updatePromotion($id, $name);

    header('location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Promotions</title>
</head>
<body>
	<div>
		<h3>Modifier promotion :</h3>
		<form method="POST">
            <input type="hidden" id='id' name='id' value=<?php echo $promotion->getId() ?>>
			<div>
				<label for="inputFirstName">Nom de la promotion</label>
				<input type="text" required value=<?= $promotion->getName() ?>  name="name" placeholder="promotion name">
			</div>
			<div>
				<button type="submit" name="update" value="update">Envoyer</button>
				<a href="index.php">Form</a>
			</div>
			</div>
		</form>
	</div>
</body>
</html>