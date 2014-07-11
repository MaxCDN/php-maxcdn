# MaxCDN REST API PHP Client

## Requirements
- PHP 5.3 or above
- PHP Curl Extension

## Installation with Composer
Composer is the recommended way to utilize the MaxCDN RWS SDK PHP library.  For more information on how to use Composer, see http://www.getcomposer.org .  

1. Add "maxcdn/php-maxcdn" as a dependency in your composer.json project file.

```json
{
    "require": {
        "maxcdn/php-maxcdn": "2.*"
    }
}
```

2. Download and install Composer (if not already installed).

```bash
curl -sS https://getcomposer.org/installer | php
```

3. Install your package dependencies.

```bash
php composer.phar install -o
```

This will download the MaxCDN library and configure composer to use it.  Composer will also build an autoloader for your use in the next step.

4. Use Composer's autoloader.

Composer prepares an autoload file which autoloads the RWS library for you on demand.  To use it, provide the following at the top of your PHP source files:

```php
require_once '/path/to/vendor/autoload.php';
```

It is advised that you understand how to optimze Composer's usage in Production environments.  For more information about Composer, visit http://getcomposer.org

The libraries are located in the src/ directory.  The classes are organized in a PSR-0 hierarchy.  You can use any PSR-0 compliant autoloader for this library. Composer is the recommended method (see above).

## Usage
```php
<?php

$api = new MaxCDN("my_alias","consumer_key","consumer_secret");

// get account information
echo  $api->get('/account.json');

// delete a file from the cache
$params = array('file' => '/robots.txt');
echo $api->delete('/zones/pull.json/6055/cache', $params);

?>
```

## Methods

It has support for `GET`, `POST`, `PUT` and `DELETE` OAuth signed requests.
