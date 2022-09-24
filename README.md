# A simple pacakge for send email when password is change

[![Latest Version on Packagist](https://img.shields.io/packagist/v/iftekhar/password-change-email.svg?style=flat-square)](https://packagist.org/packages/iftekhar/password-change-email)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/iftekhar/password-change-email/run-tests?label=tests)](https://github.com/iftekhar/password-change-email/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/iftekhar/password-change-email/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/iftekhar/password-change-email/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/iftekhar/password-change-email.svg?style=flat-square)](https://packagist.org/packages/iftekhar/password-change-email)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.


## Installation

You can install the package via composer:

```bash
composer require iftekhar/password-change-notification "^1.0.1"
```
 you can change everythink you want here example below

1.For Email Class
```bash

    public function passwordChangeNotificationMail(): Mailable
    {
      // Mail Class
        return new SendEmailFor();
    }

```
2. The columns will send email when it changes
```bash

    public function passwordColumnsName(): string
    {
        return 'password';
    }

```

3. User Email Columns 
```bash

    public function emailColumnsName(): string
    {
        return 'email';
    }

```

3. If you want queue mail here this code
```bash

    public function passwordChangeShouldBeQueue(): bool
    {
        return true;
    }

```


Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="password-change-email-views"
```

## Usage

```php
$passwordChangeEmail = new Iftekhar\PasswordChangeEmail();
echo $passwordChangeEmail->echoPhrase('Hello, Iftekhar!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Iftekhar Hossain](https://github.com/iftekhar-ifty)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
