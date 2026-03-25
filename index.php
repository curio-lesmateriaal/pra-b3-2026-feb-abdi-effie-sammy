<!doctype html>
<html lang="nl">
 

<head>
    <title>Takenlijst</title>
    <?php require_once 'head.php'; ?>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
</div class="board-container">
<h1 class="title">Taken</h1>
<a id= "addtask" href= "tasks/create.php" class= "new-task-button">Nieuwe taak</a>

    <div class="board">
        <div class="column">
        <h2>To Do</h2>
        <div  id="to-do tasks"></div>
        <?php
        require_once 'backend/conn.php';   
        statement = $conn->prepare("SELECT * FROM taken WHERE status = 'todo'");
        statement->execute();
        tasks = statement->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <?php foreach ($tasks as $task): ?>
            <div class="task" data-id="<?= $task['id'] ?>">
                <h3><?= $task['titel'] ?></h3>
                <p><?= $task['beschrijving'] ?></p>
            </div>
        <?php endforeach; ?>    



        </div>
    </div>


    <div class="column">
        <h2>In Progress</h2>
        <div id="in-progress tasks"></div>
      
    </div>
         
    <div class= "column">
         <h2>review</h2>
         <div id="review-tasks"></div>
       </div>

    </div>

    <div class="column">
        <h2>Done</h2>
        <div id="done-tasks"></div>
       
        </div>
    </div>
</div>   
</body>
 
</html>
 
 

