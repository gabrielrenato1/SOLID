<?php

namespace App\dao;

use App\components\Log;
use App\components\Notification;
use App\Database;
use App\interfaces\LogInterface;
use App\interfaces\NotificationInterface;
use App\interfaces\RegisterInterface;

class UserModel extends Database implements RegisterInterface, LogInterface, NotificationInterface {

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