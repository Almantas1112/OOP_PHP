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
    if(isset($_POST['submit']))
    {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $dbAction = new dbFunction();
        $addPage = $dbAction->setContent($title, $content);
        if(!$addPage)
        {
            header("Location: /CMS_Sprint/admin");
        } else {
            echo 'Something went wrong!';
        }
    }
    if(isset($_POST['delete'])){
        $pageid = $_POST['delete'];
        $dbDelete = new dbFunction();
        $dbDelete->deletePage($pageid);
    }
} else {
    header("Location: /CMS_Sprint/404");
}