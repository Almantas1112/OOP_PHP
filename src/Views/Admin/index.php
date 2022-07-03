<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <?php
    require_once(realpath('src/Interfaces/AdminMainMenu.php'));
    session_start();
    if(isset($_GET['path'])){
        $RegisterPage = new AdminMainMenu();
        $getRegisterPage = $RegisterPage->getAdminRegister();
    }
    else
    {
        $LoginPage = new AdminMainMenu();
        $getLoginPage = $LoginPage->getAdminLogin();
    }
    ?>
</body>
</html>

<?php
function redirect_to_admin_page(){
    header("Location: /CMS_Sprint/admin");
}

require_once(realpath('src/Controllers/dbFunction.php'));
$dbFun = new dbFunction();
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = $dbFun->Login($username, $password);
    if ($user) {
        $approval = $dbFun->isUserApproved($username);
        $emptyArr = array();
        if($approval == $emptyArr)
        {
            echo 'Waiting for approval!';
        } else {
            if($_POST['path'] == 'Login')
            {
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = $username;
                redirect_to_admin_page();
            }
        }
    } else {
        echo 'Failed to login!';
    }
}

if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmation = $_POST['pass_confirm'];
    if($password == $confirmation){
        $exists = $dbFun->isUserExist($username);
        $empty = array();
        if($exists){
            echo 'User already exist!';
        }
        else if($exists == $empty)
        {
            $register = $dbFun->UserRegister($username, $password);
            if(!$register)
            {
                echo 'Account was created, wait for Developer to confirm your application!';
            }
            else {
                echo 'Failed to Create! Please try again!';
            }
        }
    }
}

?>