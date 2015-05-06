<?php namespace Pabloroman\Opengraph\Providers;

use Illuminate\Support\ServiceProvider;

use Pabloroman\Opengraph\Opengraph;
use Pabloroman\Opengraph\Embed;

/**
 * Class OpengraphServiceProvider
 * 
 * @package pabloroman\Opengraph
 * @author  Pablo Roman  <pablo@thenextweb.com>
 * @license https://github.com/pabloroman/Opengraph/blob/master/LICENSE MIT
 */
class OpengraphServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Boot the package.
	 * 
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('Opengraph', function ($app)
		{
			return new Opengraph(new Embed, $app['cache.store']);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('Opengraph');
	}

}
