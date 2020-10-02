<?php
    require_once 'Controller/TaskController.php';
    require_once 'RouterClass.php';
    
    define('BASE_URL','http://'.$_SERVER['SERVER_NAME'].':').$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF'].'/');

    $r = new Router();

   
    $r->addRoute("home", "GET", "TaskController", "Home");
    $r->addRoute("insertar", "POST", "TaskController", "InsertarTasks");
    $r->addRoute("delete/:ID", "GET", "TasksController", "DeleteTask");
    $r->addRoute("completar/:ID", "GET", "TasksController", "MarkAsCompletedTask");
    $r->addRoute("edit/:ID", "GET", "TasksController", "EditTask");
   
    $r->setDefaultRoute("TaskController", "Home");

   
    $r->addRoute("autocompletar", "GET", "TasksAdvanceController", "AutoCompletar");

    
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>