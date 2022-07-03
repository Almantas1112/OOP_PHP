<?php
require_once(realpath('src/Controllers/dbFunction.php'));
require_once(realpath('src/Interfaces/AdminMainMenu.php'));
session_start();
session_unset();
session_destroy();
$logout = new AdminMainMenu();
$logout->getLogoutPage();