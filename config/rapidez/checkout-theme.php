<?php

return [
    'account' => [
        'navigation' => [
            'orders' => [
                'icon' => 'heroicon-o-shopping-bag',
                'href' => '/account/orders',
                'heading' => 'My orders',
                'subheading' => 'Place repeat order / View orders',
            ],
            'settings' => [
                'icon' => 'heroicon-o-cog',
                'href' => '/account/edit',
                'heading' => 'Account settings',
                'subheading' => 'Change credentials / Add addresses / Newsletters',
            ],
            'logout' => [
                'icon' => 'heroicon-o-arrow-right-on-rectangle',
                'heading' => 'Logout',
                'subheading' => 'Logout from your account',
            ],
        ],
    ],
    'checkout' => [
        'success' => [
            // Show the account registration on the success page?
            'register' => false
        ],
    ],
];
