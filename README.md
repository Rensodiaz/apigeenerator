Apigee Skeleton class generator
================================================
This tool generates Stub classes base on existing definitions in [Apigee](http://apigee.com/about/), for example [tumblr console](https://apigee.com/console/tumblr)

Features
--------

- Generates class files from Api definitions, minimizing the ammount of code to type
- Creates properties based on how often they are used across the API definition
- Adds phpDoc entries on each api method, if documentation exists

TODO
----

- Support other programming languages templates

### Installing via Composer
1. Requires [composer](http://getcomposer.org)

2. In your `composer.json` add the following lines:
```json
    "require": {
        "jnonon/apigeenerator": "*"
    },
```
3. Install your dependencies:

    php composer.phar install

4. Require Composer's autoloader. Composer also prepares an autoload file that's capable of autoloading all of the classes in any of the libraries that it downloads. To use it, just add the following line to your code's bootstrap process:

    require 'vendor/autoload.php';

## Usage Example
```php
    <?php
    /* redditApiGeenerator.php */
    require __DIR__.'/vendor/autoload.php';
    
    use Jnonon\Tools\ApiGeenerator\Client\ApiGeenerator;
    
    $apigee = new ApiGeenerator('reddit', 'RedditApi');
    
    $apigee->setApigeeSourceUrl($url);
    
    $endpoints = $apigee->getEndpoints();
    
    //Write to a path, overriding if exists
    //$apigee->generateClassForEndpoint($endpoints[0])->write('/desirable/filesystem/path', true);
    
    echo $apigee->generateClassForEndpoint($endpoints[0])->toString();
    
    //See results
    //php redditApiGeenerator.php
```
Sample Output in [Examples\RedditApi.php](Examples/RedditApi.php)
