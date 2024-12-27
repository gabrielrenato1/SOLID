<?php

require __DIR__ . "/vendor/autoload.php";

use App\dao\ContractModel;
use App\dao\LeadModel;
use App\dao\UserModel;

echo "teste";

$contractModel = new ContractModel;
echo "<pre>";
    print_r($contractModel);
echo "</pre>";

$leadModel = new LeadModel;
echo "<pre>";
print_r($leadModel);
echo "</pre>";

$userModel = new UserModel;
echo "<pre>";
print_r($userModel);
echo "</pre>";
