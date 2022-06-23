<?php
define('BASE_PATH', __DIR__ . "/../");
include BASE_PATH . "vendor/autoload.php";

$dotEnv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotEnv->load();

include BASE_PATH . "helpers/urlHelpers.php";
