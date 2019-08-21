<?php 

namespace PaulKatipunan;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider {
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include 'routes/web.php';

         $this->publishes([
           __DIR__.'/views/swagger/swaggerUi.blade.php' => resource_path('/views/swagger/swaggerUi.blade.php'),
        ]);

        $this->publishes([
           __DIR__.'/public/swagger' => public_path('/swagger'),
        ]);

        $this->publishes([
           __DIR__.'/public/swagger.yaml' => public_path('/swagger.yaml'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       


    }

}
