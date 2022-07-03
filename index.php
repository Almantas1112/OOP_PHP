<?php
$request = $_SERVER['REQUEST_URI'];
switch($request){
    case '/':
        require (__DIR__ . '/src/Views/Admin/index.php');
        break;
    case '':
        require (__DIR__ . '/src/Views/Admin/index.php');
        break;
    case '/CMS_Sprint/':
        require (__DIR__ . '/src/Views/Admin/index.php');
        break;
    case '/CMS_Sprint/index.php?path=Join-us-now%2F':
        require (__DIR__ . '/src/Views/Admin/index.php');
        break;
    case '/CMS_Sprint/index.php':
        require (__DIR__ . '/src/Views/Admin/index.php');
        break;
    case '/CMS_Sprint/?path=Join-us-now%2F':
        require (__DIR__ . '/src/Views/Admin/index.php');
        break;
    case '/CMS_Sprint/admin.php?admin=Add_Page';
        require (__DIR__ . '/src/Views/Admin/admin.php');
        break;
    case '/CMS_Sprint/admin.php';
        require (__DIR__ . '/src/Views/Admin/admin.php');
        break;
    case '/CMS_Sprint/logout.php';
        require (__DIR__ . '/src/Views/Admin/logout.php');
        break;
    case '/CMS_Sprint/404';
        require (__DIR__ . '/src/Views/404.php');
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/src/Views/404.php';
        break;
}