<?php
// source: D:\_odpad\XAMPP\htdocs\Nette\_ledex\app/templates/Homepage/default.latte

use Latte\Runtime as LR;

class Template99e8ec6118 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
?>

<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['article'])) trigger_error('Variable $article overwritten in foreach on line 57');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>

<nav class="navbar navbar-light navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) ?>">HLAVNÍ STRÁNKA</a></li>
            <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:contacts")) ?>">KONTAKTY</a></li>
            <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:equipment")) ?>">VYBAVENÍ</a></li>
            <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:services")) ?>">SLUŽBY</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
<?php
		if ($user->loggedIn) {
			?>                <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:out")) ?>">Odhlásit <span class = "glyphicon glyphicon-log-out"> </span></a></li>
<?php
		}
		else {
			?>                <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:in")) ?>">Přihlásit se <span class = "glyphicon glyphicon-log-in"> </span></a></li>
<?php
		}
?>
          </ul>
        </div>
    </nav>
	<header>
      <div class = "jumbotron">
        <div class = "logo">
          <img src = "<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 32 */ ?>/images/logo2.png">
        </div>

        <div id = "introRect">
        <center>SPOLEČENSKÉ AKCE / TV POŘADY / KONCERTY / FESTIVALY / VÝSTAVY / FILM / REKLAMA / TV PŘENOSY</center>
    	</div> 
       </div>
     </header>

<div class = "container">
<?php
		if ($page == 1) {
?>
    <div class="col-sm-12">    
      <p>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GiA3jwm5lE0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
<?php
		}
?>
        <br>    
<?php
		if ($user->loggedIn) {
?>
          <div class="articlePreview">
          <h4>Přidání článku</h4>
<?php
			if ($user->loggedIn) {
				?>          <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Article:addArticle")) ?>"><button class = "btn btn-warning"><span class = "glyphicon glyphicon-plus"> </span> Přidat článek</button></a><?php
			}
?>
</button> 
          </div> 
<?php
		}
?>

<?php
		$iterations = 0;
		foreach ($articles as $article) {
?>
            <div class="articlePreview">
                    <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Article:default", [$article->id])) ?>"><h4><?php
			echo LR\Filters::escapeHtmlText($article->title) /* line 59 */ ?></h4></a>
                    <div class = articleText><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->truncate, call_user_func($this->filters->striphtml, $article->content), 128)) /* line 60 */ ?></div>
                    <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Article:default", [$article->id])) ?>"><button class = "btn btn-warning"> Dále <span class = "glyphicon glyphicon-circle-arrow-right"></button></a>
            </div>          
<?php
			$iterations++;
		}
?>

        <ul class="pagination">
<?php
		for ($i = 1;
		$i <= $paginator->getPageCount();
		$i++) {
			?>                        <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default", [$i])) ?>"><?php
			echo LR\Filters::escapeHtmlText($i) /* line 67 */ ?></a></li>
<?php
		}
?>
        </ul>
      </p>
      <br>
    </div> 
</div>



<?php
	}

}
