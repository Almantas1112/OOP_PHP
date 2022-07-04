<?php
$request = $_SERVER['REQUEST_URI'];

switch($request){
    case '/':
        require (__DIR__ . '/src/Views/index.php');
        break;
    case '':
        require (__DIR__ . '/src/Views/index.php');
        break;
    case '/CMS_Sprint/':
        require (__DIR__ . '/src/Views/index.php');
        break;
    case '/CMS_Sprint/admin?update=' . @$_GET['update']:
        require (__DIR__ . '/src/Views/Admin/admin.php');
        break;
    case '/CMS_Sprint/?update=' . @$_GET['update']:
        require (__DIR__ . '/src/Views/Admin/admin.php');
        break;
    case '/CMS_Sprint/?=Approvals':
        require (__DIR__ . '/src/Views/Admin/admin.php');
        break;
    case '/CMS_Sprint/index.php':
        require (__DIR__ . '/src/Views/index.php');
        break;
    case '/CMS_Sprint/admin/Main?path=Join-us-now%2F';
        require (__DIR__ . '/src/Views/Admin/index.php');
        break;
    case '/CMS_Sprint/admin/index';
        require (__DIR__ . '/src/Views/Admin/index.php');
        break;
    case '/CMS_Sprint/admin/index?path=Join-us-now%2F';
        require (__DIR__ . '/src/Views/Admin/index.php');
        break;
    case '/CMS_Sprint/admin/Main':
        require (__DIR__ . '/src/Views/Admin/index.php');
        break;
    case '/CMS_Sprint/admin.php';
        require (__DIR__ . '/src/Views/Admin/admin.php');
        break;
    case '/CMS_Sprint/admin.php?admin=Add_Page';
        require (__DIR__ . '/src/Views/Admin/admin.php');
        break;
    case '/CMS_Sprint/admin?admin=Add_Page#';
        require (__DIR__ . '/src/Views/Admin/admin.php');
        break;
    case '/CMS_Sprint/admin?admin=Add_Page';
        require (__DIR__ . '/src/Views/Admin/admin.php');
        break;
    case '/CMS_Sprint/?admin=Add_Page':
        require (__DIR__ . '/src/Views/Admin/admin.php');
        break;
    case '/CMS_Sprint/logout.php';
        require (__DIR__ . '/src/Views/Admin/logout.php');
        break;
    case '/CMS_Sprint/admin/Add';
        require (__DIR__ . '/src/Views/Admin/admin.php');
        break;
    case '/CMS_Sprint/admin';
        require (__DIR__ . '/src/Views/Admin/admin.php');
        break;
    case '/CMS_Sprint/logout';
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