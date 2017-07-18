

composer create-project symfony/framework-standard-edition my_project_name "2.8.*"

composer require symfony/asset
composer require symfony/browser-kit
composer require symfony/cache
composer require symfony/class-loader
composer require symfony/config
composer require symfony/console
composer require symfony/css-selector
composer require symfony/debug
composer require symfony/dependency-injection
composer require symfony/dotenv
composer require symfony/dom-crawler
composer require symfony/event-dispatcher
composer require symfony/expression-language
composer require symfony/filesystem
composer require symfony/finder
composer require symfony/form
composer require symfony/security-guard
composer require symfony/http-foundation
composer require symfony/http-kernel
composer require symfony/intl


services:
  kernel.event_listener.json_request_transformer:
    class: Qandidate\Common\Symfony\HttpKernel\EventListener\JsonRequestTransformerListener
    tags:
      - { name: kernel.event_listener, event: kernel.request, method: onKernelRequest, priority: 100 }
	  
	  
//update database using existing entity
php app/console doctrine:schema:update --force

//update enity from exsisting database
php app/console doctrine:mapping:import --force AppBundle xml
php app/console doctrine:mapping:convert annotation ./src

// validate
 php app/console doctrine:schema:validate

//generating getters and setters
php app/console doctrine:generate:entities AppBundle/Entity/Product

//---------to solve cross origin problem-----------------
composer require nelmio/cors-bundle

Add the NelmioCorsBundle to your application's kernel:

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Nelmio\CorsBundle\NelmioCorsBundle(),
            // ...
        );
        // ...
    }