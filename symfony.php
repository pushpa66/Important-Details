

composer create-project symfony/framework-standard-edition my_project_name "2.8.*"





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