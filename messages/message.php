<?php

return [
    'sourcePath' => __DIR__ . '/../',
    'messagePath' => __DIR__,
    'languages' => [
        'ca',
        'da',
        'de',
        'es',
        'fa-IR',
        'fi',
        'fr',
        'hr',
        'hu',
        'it',
        'kz',
        'lo',
        'lt',
        'nl',
        'pt-BR',
        'pt-PT',
        'ru',
        'th',
        'tr_TR',
        'uk',
        'vi',
        'zh-CN',
    ],
    'translator' => 'Yii::t',
    'sort' => false,
    'overwrite' => true,
    'removeUnused' => false,
    'only' => ['*.php'],
    'except' => [
        '.svn',
        '.git',
        '.gitignore',
        '.gitkeep',
        '.hgignore',
        '.hgkeep',
        '/messages',
        '/tests',
        '/vendor',
    ],
    'format' => 'php',
];
