<?php
include_once 'db.php';

/**
 * Imprime la lista de tareas
function showTasks() {
  

    $tasks = getTasks();

    echo "<ul class='list-group mt-5'>";
    for ($i = 1; $i<10; $i++) {
        echo "<li class='list-group-item'>$i</li>";
    foreach($tasks as $task) {
        echo "<li class='list-group-item'>$task->titulo | $task->descripcion</li>";
    }
    echo "</ul>";

 
}

* Inserta una tarea en el sistema
 */
function addTask() {
    $tipo = $_POST['tipo'];
    

    // verifico campos obligatorios
    if (empty($tipo) || empty($prioridad)) {
        echo "<h2> ERROR! Faltan datos obligatorios </h2>";
        die();
    }

    // inserto la tarea en la DB
    $id = insertTask($tipo);

    // redirigimos al listado
    header("Location: " . BASE_URL); 
}
