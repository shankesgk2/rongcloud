<?php
/**
 * 融云配置
 * URL以`/`结尾
 */
return [
    'appKey' => env('RC_APP_KEY', ''),
    'appSecret' => env('RC_APP_SECRET', ''),
    'apiUrl' => env('RC_API_URL', 'https://api-cn.ronghub.com/'),
    'apiUrls' => [
        'https://api-cn.ronghub.com/',
        'https://api2-cn.ronghub.com/'
    ],
    'smsUrl' => env('RC_SMS_URL', 'http://api.sms.ronghub.com/')
];
