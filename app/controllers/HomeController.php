<?php

use Robin\Repositories\PageRepositoryInterface;

class HomeController extends BaseController
{
	/**
	 * @var Robin\Repositories\DbPageRepository
	 */
	private $page;

	function __construct(PageRepositoryInterface $page)
	{
		$this->page = $page;
	}

	public function index()
	{
		$page = $this->page->findByName('home');
		return View::make('home.index')->withPage($page);
	}

	public function projects()
	{
		$page = $this->page->findByName('projects');
		return View::make('home.index')->withPage($page);
	}

}