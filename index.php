<!doctype html>
<html lang="nl">
 
<head>
    <title></title>
    <?php require_once 'head.php'; ?>
</head>
 
<body>
    <?php
        require_once "db.php";
    ?>
    <div class="container">
       
    <a href=" --?delete=<?php echo $taak['id']; ?>">Verwijder</a>
    <?php
    if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM taken WHERE id=$id");
}
    ?>
 
    </div>
 
</body>
 
</html>
 
 