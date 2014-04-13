<?php

use Robin\Repositories\PageRepositoryInterface;

/**
 * Class HomeController
 */
class HomeController extends BaseController
{

	/**
	 * @var string
	 */
	protected $layout = 'layouts.page';

	/**
	 * @var Robin\Repositories\DbPageRepository
	 */
	private $page;

	/**
	 * @param PageRepositoryInterface $page
	 */
	function __construct(PageRepositoryInterface $page)
	{
		$this->page = $page;
	}

	public function index()
	{
		$this->addPageByName('home');
	}

	public function projects()
	{
		$this->addPageByName('projects');
	}

	/**
	 * @param $name
	 */
	private function addPageByName($name)
	{
		$page = $this->page->findByName($name);
		$this->layout->with('page', $page);
	}

}