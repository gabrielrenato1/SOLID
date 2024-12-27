<?php

namespace App\interfaces;

use App\components\Log;
use App\components\Notification;

interface RegisterInterface {
    public function save();
    public function saveLog(Log $log);
    public function sendNotification(Notification $notification);
}