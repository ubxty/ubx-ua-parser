<?php

return [
    'platforms' => [
        'android' => ['android'],
        'ios' => ['ios', 'macos'],
        'windows' => ['windows'],
        'linux' => ['linux'],
        'macos' => ['macos'],
        'bot' => ['bot', 'crawler', 'spider']
    ],
    
    'browsers' => [
        'chrome' => ['chrome'],
        'firefox' => ['firefox'],
        'safari' => ['safari'],
        'edge' => ['edge'],
        'opera' => ['opera'],
        'ie' => ['ie', 'internet explorer'],
        'samsung' => ['samsung'],
    ],
    
    'bot_keywords' => [
        'bot', 'crawler', 'spider', 'facebookexternalhit', 'slurp', 'bingpreview'
    ],
    
    'in_app_browsers' => [
        'WebView', 'Facebook', 'Instagram', 'Line', 'Twitter', 'Snapchat',
        'Pinterest', 'LinkedIn', 'WhatsApp', 'Discord', 'Telegram', 'Messenger'
    ]
];
