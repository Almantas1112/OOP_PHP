<?php
require_once(realpath('src/Controllers/dbFunction.php'));
require_once(realpath('src/Interfaces/AdminMainMenu.php'));
session_start();
if(null !== $_SESSION['valid'] and null !== $_SESSION['timeout'] and null !== $_SESSION['username'])
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
        if(array() == $dbAction->samePage($title)){
            $addPage = $dbAction->setContent($title, $content);
            if(!$addPage)
            {
                header("Location: /CMS_Sprint/admin");
            } else {
                echo 'Something went wrong!';
            }
        } else {
            echo 'Page with same name already exists!';
        }

    }

    if(isset($_POST['delete'])){
        $pageid = $_POST['delete'];
        $dbDelete = new dbFunction();
        $dbDelete->deletePage($pageid);
    }

    if(isset($_GET['update'])){
        if(isset($_POST['newTitle']) and isset($_POST['newContent']) and isset($_POST['updateContent']))
        {
            $id = $_GET['update'];
            $newTitle = $_POST['newTitle'];
            $newContent = $_POST['newContent'];
            $update = new dbFunction();
            $update->updatePage($id, $newTitle, $newContent);
        }
    }

} else {
    header("Location: /CMS_Sprint/404");
}