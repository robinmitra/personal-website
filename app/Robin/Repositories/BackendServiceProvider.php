<?php namespace Robin\Repositories;
 
use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Robin\Repositories\PageRepositoryInterface', 'Robin\Repositories\DbPageRepository');
	}
}