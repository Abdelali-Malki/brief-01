<?php include '../data-access/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


<div>
    <a href="addpromotion.php"><button>AJouter une promotion</button></a>
</div>
            <?php
            $data = "SELECT * FROM promotion";
            $data_res = $conn->query($data);


            if ($data_res->num_rows > 0) {
                while ($row = $data_res->fetch_assoc()) {
            ?>
                        <div class="table">
                        <div><?php echo $row["nom"]; ?></div>
                        <div class=""><a href="editpromotion.php?edit_id=<?php echo $row["id_promotion"]; ?>">Edit</a></div>
                        <div class=""><a href="../bussines/delete.php?delete_id=<?php echo $row["id_promotion"]; ?>">Delete</a></div>
                         </div>
      


            <?php
                }
            }
            ?>
     
</body>

</html>