<?php

namespace App\dao;

use App\components\Log;
use App\components\Notification;
use App\Database;
use App\interfaces\RegisterInterface;

class ContractModel extends Database implements RegisterInterface {

    public function save(){
        // TODO: Implement save() method.
    }

    public function saveLog(Log $log){
        // TODO: Implement saveLog() method.
    }

    public function sendNotification(Notification $notification){
        // TODO: Implement sendNotification() method.
    }
}