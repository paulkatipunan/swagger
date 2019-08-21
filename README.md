# Password Reset

Laravel password reset.

### Installing

Install package using Composer:

```
        composer require paulkatipunan/password_reset
```

Register the package's service provider in config/app.php:

```
        'providers' => [

                PaulKatipunan\ServiceProvider::class,

            ],
```

Run the Artisan's command:

```
        php artisan vendor:publish --provider="PaulKatipunan\ServiceProvider" --tag="email-template"

```
This will publish the email template of the password reset link. And you can modify it if you want. You can include the user details in the email.
Example:
```
        {{$user->email}}, {{$user->name}}

```



Run this Artisan's command: if you want to publish the change password blade file.

```
        php artisan vendor:publish --provider="PaulKatipunan\ServiceProvider" --tag="change-password-blade-file"

```
If you publish the change password blade file. you will be redirect to the change password blade file after clicking the sent link in your email and if you did not publish the blade file this will return you an object.

Example:
```
        {
          "email": "your_email@gmail.com",
          "token": "MWBtYVqpkotOehmVwPgCSXn3iKgYsdcIWJF7HyLQQESwWgA9pBx3Kw1isMhT",
          "created_at": "2018-11-22 06:09:59"
        }

```


### Configuration
Laravel's mailer has to be configured. Fill out these values in the .env file:
```
        MAIL_DRIVER=smtp
        MAIL_HOST=smtp.gmail.com
        MAIL_PORT=587
        MAIL_USERNAME=your_email@gmail.com
        MAIL_PASSWORD=youemailpassword
        MAIL_ENCRYPTION=ssl
        MAIL_FROM_EMAIL=from_mail@gmail.com
        MAIL_SUBJECT=Reset password
 ```

If you using gmail, also you need to enable less secure apps 
```
        https://myaccount.google.com/u/1/lesssecureapps
```

### Usage
In your controller just use sendPasswordResetLink() helper, you need to pass the email.
```
  public function create(Request $request)
  {
    
    return sendPasswordResetLink(request('email'));

  }
```

If you already set up the .env then pass the email to the helper and check your email this will send you the password reset link.

Example:
```
your view.blade.php

        <html>
               <head></head>
               <body>
                        <form action="{{ route('password.reset') }}" method="post">
                        {{csrf_field()}} 
                                <input type="text" name="email" placeholder="email">
                                <input type="submit" value="submit">
                        </form>
               </body>
        </html>
 ```
 
 ```
 your route/web.php
 
       Route::post('password/reset/request', 'PasswordResetController@send')->name('password.reset');
       
 ```
 
 ```
 your Controller
 
          public function send(Request $request)
          {

            return sendPasswordResetLink(request('email'));

          }
       
 ```
