# kevinjohn/l5-boot-camp
BaseCamp.com style framework for Laravel 5

- **Author:** Kevinjohn Gallagher
- **Website:** [https://github.com/Kevinjohn/L5BootCamp](https://github.com/Kevinjohn/L5BootCamp)
- **Version:** 0.0.1

```
BIG DISCLAIMER:
THIS IS MY FIRST LARAVEL PROJECT, THE FIRST WEBSITE I'VE BUILT IN 8 YEARS, AND I'M A CRAP DEVELOPER
```

This is a 'platform' for creating Basecamp style websites and apps. It sits on top of Laravel 5, and controls the creation of organisations, users, and their conenctions. It does not give any of the actual Basecamp.com tool functionality, but allows for plugins/packages for tools to be created to sit on top of the platform.

##### Organisation types: 	
* Company
* Agency
* Client
* Project

##### User Type:
* Team member
* Client
* Supplier
* Freelancer


## Installation

### Step 1: use Composer

To install **L5BootCamp** as a Composer package to be used with Laravel 5, simply add this to your composer.json:

```json
    "kevinjohn/l5bootcamp": "~0"
```
Then run ``` composer update ``` in your command line.

Alternatively type the following into your command line and let composer do all the work:

```php
    composer require kevinjohn/l5bootcamp
```

### Step 2: Add laravel 5 Service Providers

Open `config/app/php` in your laravel project folder.
Scroll down to the `providers` array, and add the following line to the array

```php
	'Kevinjohn\L5BootCamp\L5BootCampServiceProvider',
```


## Dependencies

##### require - dev

*   PHP 5.6
*   Laravel 5
*   Illuminate/Html


##### require - dev

*   phpunit/phpunit     4
*   phpspec/phpspec     2
*   behat/behat         3
*   squizlabs/php_codesniffer 2
*   barryvdh/laravel-debugbar   2
*   maximebf/debugbar   1


#### suggested

(These may move to required at some stage)

*   gherkins/regexpbuilderphp
*   intouch/newrelic
*   intouch/laravel-newrelic
*   laracasts/generators
*   league/booboo



## Copyright and License
L5BootCamp was written by Kevinjohn Gallagher of Pure Web Brilliant for the Laravel 5 framework.
L5BootCamp is provisionally released under the MIT License.
See the LICENSE file for details.


## Recent Changelog

### 0.0.1
* Laravel 5 Skeleton Package created.

