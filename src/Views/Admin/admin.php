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
        // echo 'Hello!';
        $title = $_POST['title'];
        $content = $_POST['content'];
        // echo $title;
        // echo '<br>';
        // echo $content;
        $dbAction = new dbFunction();
        $addPage = $dbAction->setContent($title, $content);
        if(!$addPage)
        {
            header("Location: /CMS_Sprint/admin");
        } else {
            echo 'Something went wrong!';
        }
    }
} else {
    header("Location: /CMS_Sprint/404");
}