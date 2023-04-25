<?php

return [

    // Mail Notification
    'mail_notification' => env('MAIL_NOTIFICATION') ?: false,

    // Super Admin
    'super_admin' => env('APP_SUPER_ADMIN') ?: 1,

    // Admin Credentials
    'admin_name' => env('ADMIN_NAME') ?: 'Jainam',
    'admin_email' => env('ADMIN_EMAIL') ?: 'jainam@gmail.com',
    'admin_password' => env('ADMIN_PASSWORD') ?: '12345678',

    // Default Avatar
    'default_avatar' => env('DEFAULT_AVATAR') ?: '/images/default.png',

    // Default Icon
    'default_icon' => env('DEFAULT_ICON') ?: '/images/favicon.ico',

    // Color Theme
    'color_theme' => 'gray-theme',
    // 'website'=> 'https://github.com/Jdjannat',

    // Meta
    'meta' => [
        'keywords' => 'JD Blog',
        'description' => 'Nothing is impossible in JD Blog'
    ],

    // Social Share
    'social_share' => [
        'article_share'    => env('ARTICLE_SHARE') ?: true,
        'discussion_share' => env('DISCUSSION_SHARE') ?: true,
        'sites'            => env('SOCIAL_SHARE_SITES') ?: 'google,twitter',
        'mobile_sites'     => env('SOCIAL_SHARE_MOBILE_SITES') ?: 'google,twitter',
    ],

    // Google Analytics
    'google' => [
        'id'   => env('GOOGLE_ANALYTICS_ID', 'Google-Analytics-ID'),
        'open' => env('GOOGLE_OPEN') ?: false
    ],

    // Article Page
    'article' => [
        'number'      => 15,
        'sort'        => 'desc',
        'sortColumn'  => 'published_at',
    ],

    // Discussion Page
    'discussion' => [
        'number' => 20,
        'sort'   => 'desc',
        'sortColumn' => 'created_at',
    ],

    // Footer
    'footer' => [
        'github' => [
            'open' => true,
            'url'  => 'https://github.com/Jdjannat',
        ],
        'twitter' => [
            'open' => true,
            'url'  => ''
        ],
        'meta' => '© JD Blog 2023. Powered By Jainam Darji',
    ]
];
