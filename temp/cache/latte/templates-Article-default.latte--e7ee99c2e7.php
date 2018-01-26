<?php
// source: C:\xampp\htdocs\Nette\_ledex\app/templates/Article/default.latte

use Latte\Runtime as LR;

class Templatee7ee99c2e7 extends Latte\Runtime\Template
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
    <div class="col-sm-12">    
      <p>
       <div class = "articleFull"> 
        <h4><?php echo LR\Filters::escapeHtmlText($articles->title) /* line 45 */ ?></h4>
        <?php echo LR\Filters::escapeHtmlText($articles->content) /* line 46 */ ?>

        <br>
        <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) ?>"><button class = "btn btn-warning"><span class = "glyphicon glyphicon-circle-arrow-left"> </span>  Zpět</button></a></button> 
<?php
		if ($user->loggedIn) {
			?>        <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Article:editArticle", [$articles->id])) ?>"><button class = "btn btn-warning"><span class = "glyphicon glyphicon-pencil"> </span> Upravit</button></a></button> 
        <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Article:deleteArticle", [$articles->id])) ?>"><button class = "btn btn-danger"><span class = "glyphicon glyphicon-trash"> </span> Odstranit článek</button></a></button> 
<?php
		}
?>
        <br>
      </div>
    </div>
  </p>
</div> 



<?php
	}

}
