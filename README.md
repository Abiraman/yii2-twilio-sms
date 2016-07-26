yii2-twilio-sms-gateway
=======================
With the twilio-php library, we've simplified interaction with the Twilio REST API. No need to manually create URLS or parse XML/JSON. You now interact with resources directly. Follow the Quickstart Guide to get up and running right now. The User Guide shows you how to get the most out of twilio-php.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist abiraman/yii2-twilio-sms "*"
```

or add

```
"abiraman/yii2-twilio-sms": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \twilio\AutoloadExample::widget(); ?>```