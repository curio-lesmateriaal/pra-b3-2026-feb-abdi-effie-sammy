<?php
require_once 'conn.php';

$action = $_GET['action'] ?? null;

if ($action === 'create') {
    createTask($conn);
}

function createTask($conn)
{
    // Input validatie
    if (
        empty($_POST['title']) ||
        empty($_POST['description']) ||
        empty($_POST['department'])
    ) {
        die("Vul alle velden in.");
    }

    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $department = htmlspecialchars($_POST['department']);
    $status = "todo"; // ALTIJD todo bij nieuwe taak

    // INSERT query
    $sql = "INSERT INTO takenlijst (title, description, department, status)
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $title, $description, $department, $status);

    if ($stmt->execute()) {
        header("Location: resources/task/index.php?success=1");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}
