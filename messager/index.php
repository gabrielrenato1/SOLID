<?php

use App\Messager;

require __DIR__ . "/vendor/autoload.php";

$messager = new Messager();
$messager->sendToken();