<?php
// source: D:\_odpad\XAMPP\htdocs\Nette\__ledex__\app/templates/Homepage/contacts.latte

use Latte\Runtime as LR;

class Templateb3abdb83f5 extends Latte\Runtime\Template
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
    border-top: 2px solid rgb(230, 82, 94);
  }

  .navbar-light .navbar-nav > .active > a{
    color: rgb(230, 82, 94);
  }

  #introRect{
    background-color: rgb(230, 82, 94);
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
            <li class="active"><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:contacts")) ?>">KONTAKTY</a></li>
            <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:equipment")) ?>">VYBAVENÍ</a></li>
            <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:services")) ?>">SLUŽBY</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
              <li>
              
              </li>
          </ul>
        </div>
    </nav>

      <div class = "jumbotron">
        <div class = "logo">
          <img src = "<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 47 */ ?>/images/logo2.png">
        </div>

        <div id = "introRect">
        <center>SPOLEČENSKÉ AKCE / TV POŘADY / KONCERTY / FESTIVALY / VÝSTAVY / FILM / REKLAMA / TV PŘENOSY</center>
      </div> 
       </div>
     </header>

<div class = "container">
    <div class="col-sm-4">

      <h1>Kontakty</h1>   
      <h2>Adresa</h2> 
      <p>
      LED EXPERTS CZECH s.r.o<br>   
      K Rybníku 401<br>
      Jesenice 252 42<br>
      Česká republika<br>
      VAT: CZ28389417<br>
      email: <a href = "mailto:info@ledexperts.eu">info@ledexperts.eu</a><br>

      <h2>Vedení firmy</h2>      
      <p>
        Radim Janoušek<br>
        telefon: +42000000000<br>
        email: <a href = "mailto:info@ledexperts.eu">info@ledexperts.eu</a><br>
      </p>
      </p>
  </div>
  
  <div class="col-sm-8">
    <p>
      <div class = "mapPadder">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4315.6327712148!2d14.51536302799487!3d49.97215949161768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b902aee3890ef%3A0x195b92973b9e4826!2sK+Rybn%C3%ADku+401%2C+252+42+Jesenice!5e0!3m2!1scs!2scz!4v1508748552892" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    </p>
  </div>  
  
  </div>



<?php
	}

}
