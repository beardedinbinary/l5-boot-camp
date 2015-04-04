# Kevinjohn/L5BootCamp
BaseCamp.com style framework for Laravel 5

- **Author:** Kevinjohn Gallagher
- **Website:** [https://github.com/Kevinjohn/L5BootCamp](https://github.com/Kevinjohn/L5BootCamp)
- **Version:** 0.0.1

```
BIG DISCLAIMER:
THIS IS MY FIRST LARAVEL PROJECT, THE FIRST WEBSITE I'VE BUILT IN 8 YEARS...
AND I'M AN AWFUL DEVELOPER (it's why I stopped developing in 2005).
```

This is a 'platform' for creating Basecamp style websites and apps.
It sits on top of Laravel 5, and controls the creation of organisations, users, and their conenctions.
It does not give any of the actual Basecamp.com tool functionality, but allows for plugins/packages for tools to be created to sit on top of the platform.
For all intents and purposes, this handles user registration, invitations, assigning of roles.


##### Organisation types: 	
* Company
* Agency
* Client
* Project

##### User Type:
* Team member
* Consumer
* Supplier
* Freelancer

Each user can only be assigned to 1 company, but being assigned to a company is not a pre-requisite.
###### Company:
* Where billing and account administration is handled.
* Most users will never see this Organisation type.
* Currently only Users who are 'Team Members' and are on the same email domain, can see this Organisation type.

###### Agency:
* A Company can have lots of Agency children, but an Agency can only belong to 1 Company.
* (Company 1:n Agency)
* Users who are 'Team Members' and are on the same email domain, can see this Organisation type.

###### Client:
* An Agency can have lots of Client children, but an Client can only belong to 1 Agency.
* (Agency 1:n Client)
* Clients are by default shown show as 'disabled' for 'Team Members' who are assigned to the parent Agency.
* They are not visible to any other 'Team Members'.
* A 'Consumer' can only see the Agency (disabled) parent for the Client they are assigned to, and cannot see any other Clients of that Agency.
* A 'Consumer' can see all Projects (disabled) for the Client they are assigned to.

###### Project:
* A Client can have lots of Project children, but a Project can only belong to 1 Client.
* (Client 1:n Project)
* Projects are by default shown show as 'disabled' for 'Team Members' & 'Consumers' who are assigned to the parent Client.
* They are not visible to any other 'Team Members'.
* A 'Supplier' or 'Freelancer' can only see the Agency (read-only) and Client (disabled) parents for the Project they are assigned to.


### Why?

Initially I made this very fluid.
There was no set organisation type (just N-to-N organisations), and users could be added to Organisations via any hierarchy. On initial testing though this 'felt' wrong. Yes, it was far more flexible, and the data was simply kept in 3 tables - not caring about the name or hierarchy of any given organisation, but again it lost something.

On private alpha testing, after a week, our users fell into three distinct camps:
* Agency was the start point (no company). But the client/project model required admin for 3rd parties and 'clients'
* Company and Agency was 1:n. But the client/project model required admin for 3rd parties and 'clients' and 'external stakeholders'
* All form of hierarchy on Org types was thrown out window (flat - ala Basecamp) and hierarchy was managed via users (ala basecamp)

Having a Company > Agency > Client > Project hierarchy adds an additional step for group 1 (Company 1:1 Agency) and an additional 3 steps for the 3rd group - but significantly reduces user management time.
Having some predefined "roles and permissions" was the most common feedback from group 2 (mostly consultants & freelancers - people with many stakehodlers) and group 3 (who were managing permissions at the individual user level)

This format seems to solve most issues, although some 'communication'/onboarding is required for single-unit organisations from whom Company & Agency are the same. My suggestion is a 1 click copy/merge button - although separation of billing is always a good thing (in my opinion).



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

