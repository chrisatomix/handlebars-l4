<?php namespace ChrisAtomix\HandlebarsL4;

use Illuminate\Support\ServiceProvider;

class HandlebarsL4ServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->package('chrisatomix/handlebars-l4');

		$app = $this->app;

		$app->extend('view.engine.resolver', function($resolver, $app)
		{
			$resolver->register('handlebars', function() use($app)
			{
				return $app->make('ChrisAtomix\HandlebarsL4\HandlebarsEngine');
			});
			return $resolver;
		});

		$app->extend('view', function($env, $app)
		{
			$env->addExtension('handlebars', 'handlebars');
			return $env;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('handlebars-l4');
	}

}