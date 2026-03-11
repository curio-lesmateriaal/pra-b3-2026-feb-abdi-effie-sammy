<?php

?>

<h1>Nieuwe taak aanmaken</h1>

<form action="../../../tasksController.php?action=create" method="POST">

    <label for="title">Titel:</label>
    <input type="text" name="title" required><br>

    <label for="description">Beschrijving:</label>
    <textarea name="description" required></textarea><br>

    <label for="department">Afdeling:</label>
    <select name="department" required>
        <option value="personeel">Personeel</option>
        <option value="horeca">Horeca</option>
        <option value="techniek">Techniek</option>
        <option value="inkoop">Inkoop</option>
        <option value="klantenservice">Klantenservice</option>
        <option value="groen">Groen</option>
    </select><br>



    <button type="submit">Opslaan</button>
</form>