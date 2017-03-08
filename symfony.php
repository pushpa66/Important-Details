

composer create-project symfony/framework-standard-edition my_project_name "2.8.*"







services:
  kernel.event_listener.json_request_transformer:
    class: Qandidate\Common\Symfony\HttpKernel\EventListener\JsonRequestTransformerListener
    tags:
      - { name: kernel.event_listener, event: kernel.request, method: onKernelRequest, priority: 100 }
	  
	  
//update database using existing entity
php app/console doctrine:schema:update --force

