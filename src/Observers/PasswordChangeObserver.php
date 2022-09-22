<?php

namespace Iftekhar\PasswordChangeEmail\Observers;

use Iftekhar\PasswordChangeEmail\Contracts\PasswordChangeNotificationContract;
use Illuminate\Support\Facades\Mail;

class PasswordChangeObserver
{

    public function updated(PasswordChangeNotificationContract $model)
    {
        $model->sendPasswordChangeNotification();
    }
}
