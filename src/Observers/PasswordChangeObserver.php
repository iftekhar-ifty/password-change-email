<?php

namespace Iftekhar\PasswordChangeEmail\Observers;

use Iftekhar\PasswordChangeEmail\Contracts\PasswordChangeNotificationContract;

class PasswordChangeObserver
{
    public function updated(PasswordChangeNotificationContract $model)
    {
        $model->sendPasswordChangeNotification();
    }
}
