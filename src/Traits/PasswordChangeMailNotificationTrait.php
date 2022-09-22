<?php

namespace Iftekhar\PasswordChangeEmail\Traits;

use Iftekhar\PasswordChangeEmail\Mail\PasswordChangeNotification;
use Iftekhar\PasswordChangeEmail\Observers\PasswordChangeObserver;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

trait PasswordChangeMailNotificationTrait
{
    public static function booted()
    {
        static::observe(PasswordChangeObserver::class);
    }

    public function passwordColumnsName(): string
    {
        return 'password';
    }
    public function emailColumnsName(): string
    {
        return 'email';
    }
    public function passwordChangeNotificationMail(): Mailable
    {
        return new PasswordChangeNotification();
    }

    public function isPasswordChange(): bool
    {
        return $this->wasChanged($this->passwordColumnsName());
    }

    public function passwordChangeShouldBeQueue(): bool
    {
        return true;
    }

    public function sendPasswordChangeNotification(): void
    {
        if (!$this->isPasswordChange()){
            return;
        }
        $mail = Mail::to($this->getRawOriginal($this->emailColumnsName()));

        // for Queue
        if($this->passwordChangeShouldBeQueue()){

            $mail->queue($this->passwordChangeNotificationMail());
            return;
        }

        $mail->send($this->passwordChangeNotificationMail());
    }
}
