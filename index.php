<?php

require 'vendor/autoload.php';

use Message\Message;

$ownNumber = '6285733659400'; // replace with your number
$urlEasyWa = 'http://localhost:3000/sendmessage?number='.$ownNumber;
$destination = 'destinationnumber@s.whatsapp.net'; // replace with your destination number
$message = new Message([
    'url' => $urlEasyWa,
]);
$listMessage = [
    'text' => ['text' => 'send text using guzzle'],
    'button' => [
        'text' => "Hi it's button message",
        'footer' => 'Hello World',
        'buttons' => [
            [
                'buttonId' => 'id1',
                'buttonText' => [
                    'displayText' => 'Button 1',
                ],
                'type' => 1,
            ],
            [
                'buttonId' => 'id2',
                'buttonText' => [
                    'displayText' => 'Button 2',
                ],
                'type' => 1,
            ],
            [
                'buttonId' => 'id3',
                'buttonText' => [
                    'displayText' => 'Button 3',
                ],
                'type' => 1,
            ],
        ],
        'headerType' => 1,
    ],
    'image' => [
        'image' => [
            'url' => 'https://i0.wp.com/www.phptherightway.com/images/banners/rect-180x150.png',
        ],
        'mimetype' => 'image/png',
        'fileName' => 'example.png',
        'caption' => 'This is image',
    ],
    'pdf' => [
        'document' => [
            'url' => 'https://file-examples.com/storage/fe261102296275a0792fe08/2017/10/file-sample_150kB.pdf',
        ],
        'mimetype' => 'application/pdf',
        'fileName' => 'contoh-pdf.pdf',
    ],
    'doc' => [
        'document' => [
            'url' => 'https://docs.google.com/uc?export=download&id=1sEzcuXre6bhJeiHScF3C_FCCf4lqefnv',
        ],
        'mimetype' => 'application/msword',
        'fileName' => 'contoh-doc.doc',
    ],
    'docx' => [
        'document' => [
            'url' => 'https://docs.google.com/uc?export=download&id=1jxKK8z3wrVkJiHwP4HckZ1uB77I7HzGx',
        ],
        'mimetype' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'fileName' => 'contoh-doc.docx',
    ],
    'xlsx' => [
        'document' => [
            'url' => 'https://docs.google.com/uc?export=download&id=15r5BJ4dHAMwEVUUIJNOZkv6MMLDFf8Z3',
        ],
        'mimetype' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        'fileName' => 'contoh-doc.xlsx',
    ],
    'xls' => [
        'document' => [
            'url' => 'https://docs.google.com/uc?export=download&id=1qnZDkUKzYKcgsrQlflMYtiQL5U1rmP_h',
        ],
        'mimetype' => 'application/excel',
        'fileName' => 'contoh-doc.xls',
    ],
];
// text message
$message->setContent(['to' => $destination, 'message' => $listMessage['text']]);
$message->send();

// button message
$message->setContent(['to' => $destination, 'message' => $listMessage['button']]);
$message->send();

// image message
$message->setContent(['to' => $destination, 'message' => $listMessage['image']]);
$message->send();

// document pdf
$message->setContent(['to' => $destination, 'message' => $listMessage['pdf']]);
$message->send();

// document doc
$message->setContent(['to' => $destination, 'message' => $listMessage['doc']]);
$message->send();

// document docx
$message->setContent(['to' => $destination, 'message' => $listMessage['docx']]);
$message->send();

// document xlsx
$message->setContent(['to' => $destination, 'message' => $listMessage['xlsx']]);
$message->send();

// document xls
$message->setContent(['to' => $destination, 'message' => $listMessage['xls']]);
$message->send();





