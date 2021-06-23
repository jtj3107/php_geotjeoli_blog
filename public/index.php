<?php
namespace App;

require_once __DIR__ . "/../vender/autoload.php";

// 어플리케이션
$application = Application::getInstance();

date_default_timezone_set('Asia/Seoul');
session_start();

$dbConn = $application->getDbConnectionByEnv();

$application->runByRequestUri($_SERVER['REQUEST_URI']);