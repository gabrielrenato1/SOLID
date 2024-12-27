<?php

namespace App\dao;

use App\components\Log;
use App\components\Notification;
use App\Database;
use App\interfaces\NotificationInterface;
use App\interfaces\RegisterInterface;

class LeadModel extends Database implements RegisterInterface, NotificationInterface {

    public function save(){
        // TODO: Implement save() method.
    }

    public function sendNotification(Notification $notification){
        // TODO: Implement sendNotification() method.
    }
    
}