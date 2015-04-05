<?php namespace Kevinjohn\L5BootCamp;

use Illuminate\Support\ServiceProvider;

class L5BootCampServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;



	/**
	 * Register the service provider.
	 *
     * @method string package()
	 * @return void
	 */
	public function register()
	{
		//  You never know...
        if (method_exists($this, 'publishes')) {
            throw new \Exception(
                "'Laravel 5 BootCamp' This Service Provider doesn't support Laravel 4."
            );
        }

        $this->package('Kevinjohn/l5BootCamp');

    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function boot()
    {
        //  Include the routes file
        include __DIR__.'/app/http/routes/routes.php';



        //  Publishing config to laravel
        $this->publishes([
            __DIR__.'/config/L5BootCamp.php' => config_path('L5BootCamp.php.php'),
        ], 'config');


        // Publish your migrations
        $this->publishes([
            __DIR__.'/database/migrations/' => base_path('/database/migrations')
        ], 'migrations');



        //registering Views Folder
        $this->loadViewsFrom(
            __DIR__.'/resources/views', 'L5BootCamp'
        );

        //  Publishing views to laravel
        $this->publishes([
            __DIR__.'/resources/views' => base_path('resources/views/vendor/L5BootCamp'),
        ], 'views');


        //  Publishing assets to laravel
        $this->publishes([
            __DIR__.'/resources/assets' => public_path('vendor/L5BootCamp/assets'),
        ], 'assets');


        $this->registerDummy();
    }


	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}



    /**
     * Registers the DUMMY class in the IoC
     */
    private function registerDummy()
    {
        $this->app->bind(
            'L5BootCamp::Dummy',
            function () {
                return new Dummy();
            }
        );
    }

}
