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

        // Show the newsletter signup prompt in the account center
        'newsletter' => true,
    ],
    'checkout' => [
        'credentials' => [
            // Show the newsletter signup prompt on the credentials page
            'newsletter' => true,
        ],
        
        'success' => [
            // Show the account registration on the success page
            'register' => false,

            // Show the newsletter signup prompt on the success page
            'newsletter' => true,
        ],
    ],
    'register' => [
        // Make the user create an address during registration
        'create-address' => false,

        // Show the newsletter signup prompt during registration
        'newsletter' => true,
    ],
];
