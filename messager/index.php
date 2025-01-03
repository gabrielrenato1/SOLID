<?php

use App\Messager;
use App\Email;
use App\Sms;

require __DIR__ . "/vendor/autoload.php";

$messager = new Messager(new Email());
$messager->sendToken();

echo "<br/>";

$messager = new Messager(new Sms());
$messager->sendToken();
