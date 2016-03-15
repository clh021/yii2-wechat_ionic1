Yii2 wechat ionic1 -under development
=========

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist clh021/yii2-wechat_ionic1 "*"
```

or add

```
"clh021/yii2-wechat_ionic1": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

### Migration

Migration run

```php
php yii migrate --migrationPath=@clh021/wechat_ionic1/migrations
```

### Config url rewrite in /common/config/main.php
```php
    'timeZone' => 'Asia/Shanghai', //time zone affect the formatter datetime format
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ],
        ],
        'formatter' => [ //for the showing of date datetime
            'dateFormat' => 'yyyy-MM-dd',
            'datetimeFormat' => 'yyyy-MM-dd HH:mm:ss',
            'decimalSeparator' => ',',
            'thousandSeparator' => ' ',
            'currencyCode' => 'CNY',
        ],
    ],
```

### Config backend modules in backend/config/main.php

```php
    'modules' => [
        'cms' => [
            'class' => 'clh021\wechat_ionic1\Module',
            'controllerNamespace' => 'clh021\wechat_ionic1\controllers\backend'
        ],
    ],
```

### Config frontend modules in frontend/config/main.php

```php
    'defaultRoute' => 'wechat', //set wechat as default route
    'modules' => [
        'wechat' => [
            'class' => 'clh021\wechat_ionic1\Module',
            'controllerNamespace' => 'clh021\wechat_ionic1\controllers\frontend'
        ],
    ],
```

### Add yii2-cms params in /frontend/config/params.php.
```php
return [
    'cmsTitle' => 'HikeCms',
    'cmsTitleSeo' => 'Simple Cms based on Yii2',
    'cmsFooter' => 'Copyright &copy; ' . date('Y') . ' by clh021 chen on Yii2. All Rights Reserved.',
    'cmsPostPageCount' => '2',
    'cmsLinks' => [
        'Google' => 'http://www.google.com',
        '' => 'http://github.com/clh021/yii2-wechat_ionic1',
    ],
];
```

### Access Url
1. backend : http://you-domain/backend/web/wechat
   - Catalog : http://you-domain/backend/web/wechat/wechat-catalog
   - Show : http://you-domain/backend/web/wechat/wechat-show
2. frontend : http://you-domain/fontend/web/wechat
