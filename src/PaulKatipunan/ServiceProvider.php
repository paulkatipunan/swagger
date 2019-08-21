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

        // $this->publishes([
        //    __DIR__.'/views/email/reset-password.blade.php' => resource_path('/views/email/reset-password.blade.php'),
        // ],'email-temp');

        $this->publishes([
           __DIR__.'/views/swagger/swaggerUi.blade.php' => resource_path('/views/swagger/swaggerUi.blade.php'),
        ]);

        $this->publishes([
           __DIR__.'/public/swagger' => resource_path('/public/swagger'),
        ]);

        $this->publishes([
           __DIR__.'/public/swagger.yaml' => resource_path('/public/swagger.yaml'),
        ]);
        
        // $this->publishes([
        //    __DIR__.'/views/email/change-password.blade.php' => resource_path('/views/email/change-password.blade.php'),
        // ],'change-password-blade-file');

        
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
