Symfony 3 Rest API Boiler Plate
===============================

Purpose of this project creation is to make a template/boilerplate for 
Symfony 3 Rest Api. There was new versioning process for API attached.
 Each API versions will have its own route. 
 For example:
     
    "/" => will be API version 1 -> actions are in default controller
    "/v2/" => will be API version 2 -> actions are in V2 controller 
    
 New version can be extended from older to reuse old api calls logic.
 
 Additionally Profiler enabled for dev environment. This will be useful for
 debugging.

What's inside?
--------------

This project consist of:

  * An AppBundle you can use to start coding;

  * Twig as the only configured template engine;

  * Doctrine ORM/DBAL;

  * Swiftmailer;

  * Annotations enabled for everything.

It comes pre-configured with the following bundles:

  * **FrameworkBundle** - The core Symfony framework bundle

  * [**SensioFrameworkExtraBundle**][6] - Adds several enhancements, including
    template and routing annotation capability

  * [**DoctrineBundle**][7] - Adds support for the Doctrine ORM

  * [**TwigBundle**][8] - Adds support for the Twig templating engine

  * [**SecurityBundle**][9] - Adds security by integrating Symfony's security
    component

  * [**SwiftmailerBundle**][10] - Adds support for Swiftmailer, a library for
    sending emails

  * [**MonologBundle**][11] - Adds support for Monolog, a logging library

  * **WebProfilerBundle** (in dev/test env) - Adds profiling functionality and
    the web debug toolbar

  * **SensioDistributionBundle** (in dev/test env) - Adds functionality for
    configuring and working with Symfony distributions

  * [**SensioGeneratorBundle**][13] (in dev/test env) - Adds code generation
    capabilities

  * **DebugBundle** (in dev/test env) - Adds Debug and VarDumper component
    integration
    
  * **FOSRestBundle**
  
  * **JMSSerialiserBundle**  

  * **NelmioCorsBundle**
  
  

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

How to use it?
--------------
    *Clone this repo

    *cd to project directory/ cloned folder

    composer install

    php bin/console server:run

    open http://127.0.0.1:8000/ - dev mode

    open http://127.0.0.1:8000/app.php - prod mode*
API versioning URLs:
--------------------
    *http://127.0.0.1:8000/app.php/
    *http://127.0.0.1:8000/app.php/v2/



Enjoy!

[1]:  https://symfony.com/doc/3.0/book/installation.html
[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/3.0/book/doctrine.html
[8]:  https://symfony.com/doc/3.0/book/templating.html
[9]:  https://symfony.com/doc/3.0/book/security.html
[10]: https://symfony.com/doc/3.0/cookbook/email.html
[11]: https://symfony.com/doc/3.0/cookbook/logging/monolog.html
[13]: https://symfony.com/doc/3.0/bundles/SensioGeneratorBundle/index.html
