<?php
require_once(realpath('src/Interfaces/Main.php'));
$indexPage = new Main();
$indexPage->index();