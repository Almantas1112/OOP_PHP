<?php
require_once(realpath('src/Controllers/dbFunction.php'));
require_once(realpath('src/Interfaces/AdminMainMenu.php'));
session_start();
if(null !== $_SESSION['valid'] and null !== $_SESSION['timeout'] and null !== ['username'])
{
    $mainMenu = new AdminMainMenu();
    $getMainMenu = $mainMenu->getAdminDashboard();
    if(isset($_GET['admin']))
    {
        $getMainMenu = $mainMenu->getAdminPost();
    }
} else {
    header("Location: /CMS_Sprint/404");
}