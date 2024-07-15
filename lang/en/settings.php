<?php

return [
    'account'       => [
        '2fa'               => [
            'actions'               => [
                'disable'   => 'Disable two-factor authentication',
                'finish'    => 'Finish setup and log in',
            ],
            'activation_helper'     => 'To finish setting up your account\'s two-factor authentication, please follow these instructions.',
            'disable'               => [
                'helper'    => 'If you want to disable two-factor authentication click the button below. Keep in mind that this will leave your account vulnerable to anyone that knows your login information.',
                'title'     => 'Disable two-factor authentication',
            ],
            'enable_instructions'   => 'To start the activation process, generate your authentication QR code, then scan it into the Google Authenticator App (:ios, :android), or another similar authenticator app.',
            'enabled'               => 'Two-factor authentication is currently enabled on your account.',
            'error_enable'          => 'Invalid Code, try again',
            'fields'                => [
                'otp'       => 'Enter the One Time Password (OTP) provided by the authenticator app',
                'qrcode'    => 'Scan the following QR Code with your authenticator app to generate a One Time Password (OTP)',
            ],
            'generate_qr'           => 'Generate QR code',
            'helper'                => 'Two-factor authentication (2FA) strengthens access security by requiring two methods (also referred to as factors) to verify your identity on each login.',
            'learn_more'            => 'Learn more about two-factor authentication.',
            'social'                => 'Kanka two-factor authentication is only enabled for users that login using their e-mail and password. Change your login method in your account settings before being able to enable this option.',
            'success_disable'       => 'Two-factor authentication successfully disabled.',
            'success_enable'        => 'Two-factor authentication enabled successfully. Please log in again to finish the setup.',
            'success_key'           => 'Your secure QR code was successfully generated. Please complete your setup to activate two-factor authentication.',
            'title'                 => 'Two-factor authentication',
        ],
        'actions'           => [
            'social'            => 'Switch to Kanka Login',
            'update_email'      => 'Update email',
            'update_password'   => 'Update password',
        ],
        'email'             => 'Change email',
        'email_success'     => 'Email updated.',
        'password'          => 'Change password',
        'password_success'  => 'Password updated.',
        'social'            => [
            'error'     => 'You are already using the Kanka login for this account.',
            'helper'    => 'Your account is currently managed by :provider. You can stop using it and switch to the standard Kanka login by setting up a password.',
            'success'   => 'Your account now uses the Kanka login.',
            'title'     => 'Social to Kanka',
        ],
        'title'             => 'Account',
    ],
    'api'           => [
        'helper'    => 'Welcome to the Kanka APIs. Generate a Personal Access Token to use in your API request to gather information about the campaigns you are a part of.',
        'link'      => 'Read the API documentation',
        'title'     => 'API',
    ],
    'apps'          => [
        'actions'   => [
            'connect'   => 'Connect',
            'remove'    => 'Remove',
        ],
        'benefits'  => 'Kanka provides a few integrations to third party services. More third party integrations are planned for the future.',
        'discord'   => [
            'confirm'   => 'Are you sure you want to disconnect your account from Discord? This will remove any roles you have been synced with.',
            'errors'    => [
                'add'   => 'An error occurred linking up your Discord account with Kanka. Please try again. If this keeps happening, please be aware that Discord has a limit on 100 joined servers when using their APIs.',
            ],
            'success'   => [
                'add'       => 'Your Discord account has been linked.',
                'remove'    => 'Your Discord account has been unlinked.',
            ],
            'text'      => 'Link your Discord account with Kanka to automatically get access to your subscription roles and private channels.',
            'unlock'    => 'Unlock Discord roles',
        ],
        'title'     => 'App Integration',
    ],
    'billing'       => [
        'placeholder'   => 'If you need additional contact or tax information added to your receipts (bussines address, VAT number, etc.), enter it below and it will appear on all of your receipts.',
        'save'          => 'Save billing information',
        'title'         => 'Billing Information',
    ],
    'boost'         => [
        'exceptions'    => [
            'already_boosted'       => 'Campaign :name is already being boosted.',
            'exhausted_boosts'      => 'You are out of boosts to give. Remove your boost from a campaign before giving it to another.',
            'exhausted_superboosts' => 'You are out of boosts. You need 3 boosters to superboost a campaign.',
        ],
    ],
    'countries'     => [
        'austria'       => 'Austria',
        'belgium'       => 'Belgium',
        'france'        => 'France',
        'germany'       => 'Germany',
        'italy'         => 'Italy',
        'netherlands'   => 'The Netherlands',
        'spain'         => 'Spain',
    ],
    'layout'        => [
        'title' => 'Layout',
    ],
    'menu'          => [
        'account'               => 'Account',
        'api'                   => 'API',
        'appearance'            => 'Appearance',
        'apps'                  => 'Apps',
        'boosters'              => 'Boosters',
        'notifications'         => 'Notifications',
        'other'                 => 'Other',
        'patreon'               => 'Patreon',
        'payment_options'       => 'Payment Options',
        'personal_settings'     => 'Personal Settings',
        'premium'               => 'Premium campaigns',
        'profile'               => 'Public profile',
        'settings'              => 'Settings',
        'subscription'          => 'Subscription',
        'subscription_status'   => 'Subscription Status',
    ],
    'patreon'       => [
        'deprecated'    => 'Deprecated feature - if you wish to support Kanka, please do so with a :subscription. Patreon linking is still active for our Patrons who have linked their account before the move away from Patreon.',
        'pledge'        => 'Pledge: :name',
        'remove'        => [
            'button'    => 'Unlink your Patreon account',
            'success'   => 'Your Patreon account has been unlinked.',
            'text'      => 'Unlinking your Patreon account with Kanka will remove your bonuses, name on the hall of fame, campaign boosts, and other features linked to supporting Kanka. None of your boosted content will be lost (e.g. entity headers). By subscribing again, you will have access to all your previous data, including the ability to unlock your previously premium campaigns.',
            'title'     => 'Unlink your Patreon account with Kanka',
        ],
        'title'         => 'Patreon',
    ],
    'profile'       => [
        'actions'   => [
            'update_profile'    => 'Update profile',
        ],
        'avatar'    => 'Profile Picture',
        'success'   => 'Profile updated.',
        'title'     => 'Public Profile',
    ],
    'subscription'  => [
        'actions'               => [
            'cancel_sub'        => 'Cancel subscription',
            'subscribe'         => 'Subscribe',
            'update_currency'   => 'Save billing currency',
        ],
        'billing'               => [
            'helper'    => 'Your billing information is processed and stored safely through :stripe. This payment method is used for all of your subscriptions.',
            'saved'     => 'Saved payment method',
        ],
        'cancel'                => [
            'options'   => [
                'competitor'        => 'Switching to a competitor',
                'financial'         => 'Subscription is too expensive',
                'missing_features'  => 'Missing features',
                'not_for'           => 'Subscription is not for me',
                'not_playing'       => 'No longer playing or campaign on hiatus',
                'not_using'         => 'Not currently using Kanka',
                'other'             => 'Other',
            ],
            'text'      => 'Sorry to see you go! Cancelling your subscription will keep it active until :date, after which you will lose your campaign boosts and other benefits related to supporting Kanka. Feel free to fill out the following form to inform us what we can do better, or what lead to your decision.',
        ],
        'cancelled'             => 'Your subscription has been cancelled. You can renew a subscription once your current subscription ends after :date.',
        'change'                => [
            'text'  => [
                'monthly'           => 'You are subscribing at the :tier tier, billed monthly for :amount.',
                'upgrade_monthly'   => 'You are upgrading to the :tier tier for :upgrade, thereafter billed monthly for :amount.',
                'upgrade_paypal'    => 'You are upgrading to the :tier tier for :upgrade until :date.',
                'upgrade_yearly'    => 'You are upgrading to the :tier tier for :upgrade, thereafter billed annually for :amount.',
                'yearly'            => 'You are subscribing at the :tier tier, billed annually for :amount.',
            ],
            'title' => 'Change Subscription Tier',
        ],
        'coupon'                => [
            'check'         => 'Check promo code',
            'invalid'       => 'Invalid promotional code.',
            'label'         => 'Promotional code',
            'percent_off'   => 'We will discount your first yearly subscription by :percent%!',
        ],
        'currencies'            => [
            'brl'   => 'BRL',
            'eur'   => 'EUR',
            'usd'   => 'USD',
        ],
        'currency'              => [
            'title' => 'Change your preferred billing currency',
        ],
        'errors'                => [
            'callback'      => 'Our payment provider reported an error. Please try again or contact us if the problem persists.',
            'failed'        => 'We are currently experiencing issues with our billing system. Please contact us at :email for assistance.',
            'subscribed'    => 'Couldn\'t process your subscription. Stripe provided the following hint.',
        ],
        'fields'                => [
            'active_since'      => 'Active since',
            'active_until'      => 'Active until',
            'billing'           => 'Billing',
            'currency'          => 'Billing Currency',
            'payment_method'    => 'Payment method',
            'plan'              => 'Current plan',
            'reason'            => 'Reason',
        ],
        'helpers'               => [
            'alternatives'          => 'Pay for your subscription using :method. This payment method won\'t auto-renew at the end of your subscription. :method is only available in Euros.',
            'alternatives-2'        => 'Pay for your subscription using :method. This is a one time payment that doesn\'t automatically renew at at the end of the subscription.',
            'alternatives_warning'  => 'Upgrading your subscription when using this method is not possible. Please subscribe again when your current one ends.',
            'alternatives_yearly'   => 'We only accept yearly subscriptions when subscribing with :method',
            'currency_blocked'      => 'It is not possible to change currency once you have had an active Kanka subscription. Please contact us at :email for assistance.',
            'paypal_v3'             => 'Safely pay for your yearly subscription using PayPal.',
            'stripe'                => 'Your billing information is processed and stored safely through :stripe.',
        ],
        'manage_subscription'   => 'Manage subscription',
        'payment_method'        => [
            'actions'       => [
                'add'               => 'Add',
                'add_new'           => 'Add a new payment method',
                'change'            => 'Change payment method',
                'save'              => 'Save payment method',
                'show_alternatives' => 'Alternative payment options',
            ],
            'add_one'       => 'You currently have no payment method saved.',
            'alternatives'  => 'You can subscribe using these alternative payment options. This action will charge your account once and not auto-renew your subscription every month.',
            'card'          => 'Card',
            'card_name'     => 'Name on card',
            'country'       => 'Country of residence',
            'ending'        => 'Ending in',
            'helper'        => 'This card will be used for all of your subscriptions.',
            'new_card'      => 'Add a new payment method',
            'saved'         => ':brand **** :last4',
        ],
        'periods'               => [
            'monthly'   => 'Monthly',
            'yearly'    => 'Yearly',
        ],
        'placeholders'          => [
            'downgrade_reason'  => 'Optionally tell us why you are downgrading your subscription.',
            'reason'            => 'Optionally tell us why you are no longer supporting Kanka. Was a feature missing? Did your financial situation change?',
        ],
        'plans'                 => [
            'cost_monthly'  => ':currency :amount billed monthly',
            'cost_yearly'   => ':currency :amount billed yearly',
        ],
        'sub_status'            => 'Subscription information',
        'subscription'          => [
            'actions'   => [
                'cancel'            => 'Cancel subscription',
                'downgrading'       => 'Please contact us for downgrading',
                'rollback'          => 'Change to Kobold',
                'subscribe'         => 'Change to :tier monthly',
                'subscribe_annual'  => 'Change to :tier yearly',
            ],
        ],
        'success'               => [
            'alternative'   => 'Your payment was registered. You will get a notification as soon as it is processed and your subscription is active.',
            'callback'      => 'Your subscription was successful. Your account will be updated as soon as our payment provider informs us of the change (this might take a few minutes).',
            'cancel'        => 'Your subscription was cancelled. It will continue to be active until the end of your current billing period.',
            'currency'      => 'Your preferred currency setting was updated.',
            'subscribed'    => 'Your subscription was successful! Don\'t forget to subscribe our newsletter to be notified of changes in Kanka. Also, you can check out our discord and become part of the community',
        ],
        'tiers'                 => 'Subscription Tiers',
        'trial_period'          => 'Yearly subscriptions have a 14 day cancellation policy. Contact us at :email if you wish to cancel your yearly subscription and get a refund.',
        'upgrade_downgrade'     => [
            'button'    => 'Upgrade & Downgrade Information',
            'cancel'    => [
                'bullets'   => [
                    'bonuses'   => 'Your bonuses stay enabled until the end of your payment period.',
                    'boosts'    => 'The same happens for your boosted campaigns. Boosted features become invisible but aren\'t deleted when a campaign is no longer boosted.',
                    'kobold'    => 'To cancel your subscription, change to the Kobold tier.',
                    'premium'   => 'The same happens for your premium campaigns. Premium features become invisible but aren\'t deleted when a campaign is no longer premium.',
                ],
                'title'     => 'When cancelling your subscription',
            ],
            'downgrade' => [
                'bullets'           => [
                    'end'   => 'Your current tier will stay active until the end of your current billing cycle, after which you will be downgraded to your new tier.',
                ],
                'provide_reason'    => 'If you can, please share with us why you are downgrading your subscription.',
                'title'             => 'When downgrading to a lower tier',
            ],
            'upgrade'   => [
                'bullets'   => [
                    'immediate' => 'Your payment method will be billed immediately and you will have access to your new tier.',
                    'prorate'   => 'When upgrading to a higher tier, you will only be billed the difference to your new tier.',
                ],
                'title'     => 'When upgrading to a higher tier',
            ],
        ],
        'warnings'              => [
            'incomplete'    => 'We couldn\'t charge your credit card. Please update your credit card information, and we will try charging it again in the next few days. If it fails again, your subscription will be cancelled.',
            'patreon'       => 'Your account is currently linked with Patreon. Please unlink your account in your :patreon settings before switching to a Kanka subscription.',
        ],
    ],
];
