<?php

namespace Iftekhar\PasswordChangeEmail\Contracts;

use Illuminate\Mail\Mailable;

interface PasswordChangeNotificationContract
{
    public function passwordColumnsName(): string;

    public function emailColumnsName(): string;

    public function passwordChangeNotificationMail(): Mailable;

    public function isPasswordChange(): bool;

    public function passwordChangeShouldBeQueue(): bool;

    public function sendPasswordChangeNotification(): void;
}
