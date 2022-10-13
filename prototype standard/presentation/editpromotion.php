<?php include '../data-access/connection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>




    <form action="../bussines/edit.php" method="POST">
        <?php
        $data = "SELECT * FROM promotion WHERE id_promotion = " . $_GET["edit_id"];
        $data_res = $conn->query($data);
        if ($data_res->num_rows > 0) {
            while ($row = $data_res->fetch_assoc()) {
        ?>
                <input type="text" name="nom" value="<?php echo $row["nom"]; ?>">
                <input type="hidden" name="id_promotion" value="<?php echo $row["id_promotion"] ?>">
                <input type="submit" value="Submit" name="edit"> 
        <?php
            }
        }
        ?>

    </form>
</body>

</html>