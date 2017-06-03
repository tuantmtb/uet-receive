<?php
return [
    'debug' => env('APP_DEBUG', false),
    'verify_token' => 'UETer_bot',
    'app_token' => 'EAABZCTdZCzmv4BADoZB56rhJ8BDeZAPgOEXkUGsuE1lNg2sH3o6ZC6HbU3uNIdVSp5udAsRRoxstNwar9lse8M15xdjceQLWZCZCesgdIj4gVKHtdzZAsmffxOe4ov4mQZB8R7tCNtbDh6YGrpuqKWUSRPmM5JRH3ciaBZCVQTGSPAugZDZD',
    'app_secret' => env('MESSENGER_APP_SECRET', null),
    'auto_typing' => true,
    'handlers' => [
        Casperlaitw\LaravelFbMessenger\Contracts\DefaultHandler::class
    ],
    'custom_url' => '/webhook',
    'postbacks' => [],
];
//return [
//    'debug' => env('APP_DEBUG', false),
//    'verify_token' => env('MESSENGER_VERIFY_TOKEN'),
//    'app_token' => env('MESSENGER_APP_TOKEN'),
//    'app_secret' => env('MESSENGER_APP_SECRET', null),
//    'auto_typing' => true,
//    'handlers' => [
//        Casperlaitw\LaravelFbMessenger\Contracts\DefaultHandler::class
//    ],
//    'custom_url' => '/webhook',
//    'postbacks' => [],
//];
