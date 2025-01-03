<?php

use App\Messager;

require __DIR__ . "/vendor/autoload.php";

$messager = new Messager();

$messager->setChannel("email");
$messager->sendToken();

echo "<br/>";

$messager->setChannel("sms");
$messager->sendToken();