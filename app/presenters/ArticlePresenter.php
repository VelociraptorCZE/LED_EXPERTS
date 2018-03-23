<?php

namespace App\Presenters;

use Nette;
use Nette\Database\Context;
use Nette\Application\UI;
use Nette\Utils\Strings;


class ArticlePresenter extends Nette\Application\UI\Presenter
{
	private $database;

	public function __construct(Context $database)
	{
		$this->database = $database;
	}

	public function renderDefault($id) {
		$article  = $this->database->table("articles")->get($id);
		$this->template->articles = $article;       
	}

	public function renderAddArticle(){

	}

	public function actionDeleteArticle($id){
		$this->database->table("articles")->get($id)->delete();
		$this->flashMessage("Článek odstraněn");
		$this->redirect("Homepage:default");
	}

	public function actionEditArticle($id){
		$article = $this->database->table("articles")->get($id);
		$this["addArticle"]->setDefaults($article->toArray());
	}

	protected function createComponentAddArticle(){
		$form = new UI\Form;
		$form->addText("title", "Nadpis")->setRequired();
		$form->addTextArea("content", "Obsah")->setRequired();
		$form->addSubmit("send", "Přidat");
		$form->onSuccess[] = [$this, "addArticleSucceeded"];
		return $form;
	}

	public function addArticleSucceeded($form, $values){
		
		$id = $this->getParameter("id");
		if ($id){
			$redirectToArticle = $this->database->table("articles")->get($id);
			$redirectToArticle->update($values);
			$this->flashMessage("Článek upraven úspěšně!");
		}
		else{
			$redirectToArticle = $this->database->table("articles")->insert($values);
			$this->flashMessage("Článek přidán úspěšně!");
		}
		$this->redirect("Article:default", $redirectToArticle->id);
	}
    
}
