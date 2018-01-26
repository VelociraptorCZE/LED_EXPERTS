<?php
// source: C:\xampp\htdocs\Nette\_ledex\app/templates/Article/addArticle.latte

use Latte\Runtime as LR;

class Template9f791b6eaf extends Latte\Runtime\Template
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
<?php
		if ($user->loggedIn) {
			?>       <?php
			/* line 45 */
			echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["addArticle"], []);
?>

       Nadpis:
       <input type = "text" maxlength = "128" class = "form-control"<?php
			$_input = end($this->global->formsStack)["title"];
			echo $_input->getControlPart()->addAttributes(array (
			'type' => NULL,
			'maxlength' => NULL,
			'class' => NULL,
			))->attributes() ?>><br>
       Text:
       <textarea class = "form-control" rows = "4" style = "max-width: 100%; min-width: 100%;"<?php
			$_input = end($this->global->formsStack)["content"];
			echo $_input->getControlPart()->addAttributes(array (
			'class' => NULL,
			'rows' => NULL,
			'style' => NULL,
			))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea><br>
       <center><input type = "submit" value = "Přidat" class = "btn btn-warning" style = "width: 128px;"<?php
			$_input = end($this->global->formsStack)["send"];
			echo $_input->getControlPart()->addAttributes(array (
			'type' => NULL,
			'value' => NULL,
			'class' => NULL,
			'style' => NULL,
			))->attributes() ?>></center>
       <?php
			echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?>

<?php
		}
		else {
?>
       Bez přihlášení nemůžete vytvářet, nebo upravovat články! Sorry jako!
<?php
		}
?>
      </p>
    </div>
</div> 



<?php
	}

}
