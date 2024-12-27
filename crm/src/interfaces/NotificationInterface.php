<?php

namespace App\interfaces;

use App\components\Notification;

interface NotificationInterface{
    public function sendNotification(Notification $notification);
}