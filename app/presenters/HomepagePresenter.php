<?php

namespace App\Presenters;

use Nette;
use Nette\Database\Context;


class HomepagePresenter extends Nette\Application\UI\Presenter
{
	private $database;

	public function __construct(Context $database)
	{
		$this->database = $database;
	}

	public function renderDefault($page = 1) {
		$paginator = new Nette\Utils\Paginator;
		$articlesCount  = $this->database->table("articles")->count();
		$paginator->setItemsPerPage(5);
		$paginator->setItemCount($articlesCount);
		$paginator->setPage($page);
		$articles = $this->database->table("articles")->order("id DESC")->limit($paginator->getItemsPerPage(), $paginator->getOffset());
		$this->template->page = $page;
		$this->template->paginator = $paginator;
		$this->template->articles = $articles;
	}

}
