<?php
// source: C:\xampp\htdocs\Nette\_ledex\app/templates/Homepage/equipment.latte

use Latte\Runtime as LR;

class Template6a3ce1b299 extends Latte\Runtime\Template
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

<style>

  .navbar-light .navbar-nav > .active{
    border-top: 2px solid rgb(39,174,96);
  }

  .navbar-light .navbar-nav > .active > a{
    color: rgb(39,174,96);
  }

  #introRect{
    background-color: rgb(39,174,96);
    color: #FFF;
  }

</style>

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
            <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) ?>">HLAVNÍ STRÁNKA</a></li>
            <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:contacts")) ?>">KONTAKTY</a></li>
            <li class="active"><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:equipment")) ?>">VYBAVENÍ</a></li>
            <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:services")) ?>">SLUŽBY</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
<?php
		if ($user->loggedIn) {
			?>                <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:out")) ?>">Odhlásit <span class = "glyphicon glyphicon-log-out"> </span></a></li>
<?php
		}
		else {
			?>                <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:in")) ?>">Přihlásit se<span class = "glyphicon glyphicon-log-in"> </span></a></li>
<?php
		}
?>
          </ul>
        </div>
    </nav>

      <div class = "jumbotron">
        <div class = "logo">
          <img src = "<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 49 */ ?>/images/logo2.png">
        </div>

        <div id = "introRect">
        <center>SPOLEČENSKÉ AKCE / TV POŘADY / KONCERTY / FESTIVALY / VÝSTAVY / FILM / REKLAMA / TV PŘENOSY</center>
      </div> 
       </div>
     </header>

<div class = "container"> 
  <img class="img-responsive" src = "<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 59 */ ?>/images/equipment-1.jpg">
  <br>
  <center><h4>Kabely</h4></center>
  <br>
  <img class="img-responsive" src = "<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 63 */ ?>/images/equipment-2.jpg">
  <br>
  <center><h4>LED panely</h4></center>
  <br>
</div>



<?php
	}

}
