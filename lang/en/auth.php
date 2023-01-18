<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'banned'    => [
        'permanent' => 'You\'ve been permanently banned.',
        'temporary' => '{1} You\'ve been banned for :days day|[2,*] You\'ve been banned for :days days',
    ],
    'confirm'   => [
        'confirm'   => 'Confirm',
        'error'     => 'Invalid password, please try again.',
        'helper'    => 'Please confirm your password before being able to continue.',
        'title'     => 'Password confirmation',
    ],
    'failed'    => 'These credentials do not match our records.',
    'helpers'   => [
        'password'  => 'Show / Hide password',
    ],
    'login'     => [
        'fields'                => [
            '2fa'       => 'One time password',
            'email'     => 'Email',
            'password'  => 'Password',
        ],
        'login_with_facebook'   => 'Login with Facebook',
        'login_with_google'     => 'Login with Google',
        'login_with_twitter'    => 'Login with Twitter',
        'new_account'           => 'Register a new account',
        'or'                    => 'OR',
        'password_forgotten'    => 'Forgot your password?',
        'remember_me'           => 'Remember me',
        'submit'                => 'Login',
        'title'                 => 'Login',
    ],
    'register'  => [
        'already'                   => 'Already have an account? :login',
        'already_account'           => 'Already have an account?',
        'errors'                    => [
            'email_already_taken'   => 'An account with this email is already registered.',
            'general_error'         => 'An error occurred while registering your account. Please try again.',
        ],
        'fields'                    => [
            'email'     => 'Email',
            'name'      => 'Username',
            'password'  => 'Password',
            'tos_clean' => 'I agree to the :privacy',
        ],
        'register_with_facebook'    => 'Register with Facebook',
        'register_with_google'      => 'Register with Google',
        'register_with_twitter'     => 'Register with Twitter',
        'submit'                    => 'Register',
        'title'                     => 'Register',
        'tos'                       => 'By registering an account, you agree to our :terms and :privacy.',
        'log-in'                    => 'Log in',
    ],
    'reset'     => [
        'fields'    => [
            'email'                 => 'Email Address',
            'password'              => 'Password',
            'password_confirmation' => 'Confirm your password',
        ],
        'send'      => 'Send Password Reset Link',
        'submit'    => 'Reset password',
        'title'     => 'Reset password',
    ],
    'tfa'       => [
        'helper'    => 'Two-factor authentication is enabled. Please provide the One Time Password (OTP) provided by your authenticator app.',
        'title'     => 'Two-Factor Authentication',
    ],
    'throttle'  => 'Too many login attempts. Please try again in :seconds seconds.',
];
