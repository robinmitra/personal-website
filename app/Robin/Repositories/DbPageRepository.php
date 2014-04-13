<?php namespace Robin\Repositories;

use Page;

class DbPageRepository implements PageRepositoryInterface
{
	public function findByName($name)
	{
		return Page::where('name', '=', $name)->first();
	}

}