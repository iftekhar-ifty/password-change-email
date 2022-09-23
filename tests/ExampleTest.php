<?php

use Iftekhar\PasswordChangeEmail\Tests\Models\User;
use Illuminate\Support\Facades\Mail;

it('will not to user password change', function () {
    Mail::fake();
    $user = User::factory()->create();

    $user->name = 'Iftekhar';
    $user->save();
    Mail::assertNotSent($user->passwordChangeNotificationMail()::class);
});
