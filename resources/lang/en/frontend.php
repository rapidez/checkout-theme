<?php

return [
    'product' => 'Product',
    'price' => 'Price',
    'amount' => 'Amount',
    'tax' => 'Tax',
    'shipping' => 'Shipping',
    'free' => 'Free',
    'discount' => 'Discount',
    'subtotal' => 'Subtotal',
    'total' => 'Total',
    'order' => 'Order',
    'send' => 'Send',

    'account' => [
        'account' => 'Account',
        'back' => 'Back to login',
        'register' => 'Register',
        'login' => 'Log in',
        'logout' => 'Log out',
        'email' => 'E-mail address',
        'password' => 'Password',
        'forgot_password' => 'Forgot your password?',
        'reset_password' => 'Reset password',
        'change_password' => 'Change password',
        'reset_password_cta' => 'Enter your email address below, you will receive an email within minutes to reset the password.',

        'create' => 'Create account',
        'cta' => 'No account yet? Create an account and benefit instantly from repeat orders, order statuses and easy returns!',

        'dashboard' => [
            'dashboard' => 'Customer center',
            'back' => 'Back to dashboard',
            'overview' => 'Account overview',
            'features' => 'Account features',
            'settings' => 'Account settings',
            'orders' => 'My orders',
            'no_orders' => 'You do not have any orders yet.'
        ],
    ],

    'notifications' => [
        'password_reset' => [
            'request' => 'An email has been sent with a password reset link if an account exists with the provided email address.',
            'complete' => 'Your password has been changed, please log in.',
        ],
        'password_changed' => 'Changed successfully!',
    ],

    'cart' => [
        'cart' => 'Cart',
        'order_overview' => 'Order overview',
        'back' => 'Return to home',
        'continue' => 'Continue shopping',
        'empty' => 'You don\'t have anything in your cart.',
        'remove' => 'Remove',
        'checkout' => 'To checkout',
        'cta' => 'Ordered within 2 minutes',

        'coupon' => [
            'apply' => 'Apply',
            'code' => 'Coupon code',
            'placeholder' => 'Enter code',
        ],
    ],

    'checkout' => [
        'step' => 'Step :step out of :total',
        'order_overview' => 'Order overview',

        'credentials' => [
            'credentials' => 'Credentials',
            'back' => 'Back to cart',
            'next' => 'Next',
            'addresses' => 'My addresses',
            'hide_billing' => 'My billing and shipping address are the same',
            'select_shipping' => 'Select as shipping',
            'select_billing' => 'Select as billing',
            'new_address' => 'Add new address',
            'edit_address' => 'Edit',
            'save_address' => 'Save address',
        ],
        'login' => [
            'login_text' => 'We will send your order confirmation to this e-mail address. We will also check if you already have an account so you can checkout more efficiently.',
            'email_exists' => 'You already have an account with this e-mail address. Please log in to continue.',
            'welcome_back' => 'Welcome back',
            'wrong_account' => [
                'before' => 'Is this not your account?',
                'after' => 'and use a different e-mail address.',
            ],
        ],
        'shipping' => [
            'method' => 'Shipping method',
        ],
        'payment' => [
            'payment' => 'Payment',
            'method' => 'Payment method',
            'back' => 'Back to credentials',
            'order' => 'Place order',
        ],
        'success' => [
            'title' => 'Thank you for your order!',

            'note' => [
                'title' => 'We will get to work for you right away!',
                'confirmation' => 'We will send a confirmation of your order :orderid to :email',
            ],
        ],
    ],

    'address' => [
        'type' => [
            'both' => 'Shipping & billing address',
            'shipping' => 'Shipping address',
            'billing' => 'Billing address',
            'none' => 'Address',
        ],
    ],

    'newsletter' => [
        'newsletter' => 'Newsletter',
        'cta' => 'Yes, I want to subscribe to the newsletter',
        'info' => 'You will receive this newsletter approximately 2x a year',
    ]
];