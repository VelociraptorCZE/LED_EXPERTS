<?php
// source: E:\xampp\htdocs\Nette\_WEBY\_ledex\LED_EXPERTS\app/templates/@layout.latte

use Latte\Runtime as LR;

class Template8ac42c9877 extends Latte\Runtime\Template
{
	public $blocks = [
		'head' => 'blockHead',
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'head' => 'html',
		'scripts' => 'html',
	];


	function main()
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html>
<head>

<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('head', get_defined_vars());
?>
	
</head>

<body>

<?php
		$iterations = 0;
		foreach ($flashes as $flash) {
			?>	<div id = "customFlashMessage"<?php if ($_tmp = array_filter(['flash', $flash->type])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>>
		<div class="alert alert-primary" role="alert"><?php echo LR\Filters::escapeHtmlText($flash->message) /* line 24 */ ?></div>
	</div>
<?php
			$iterations++;
		}
?>
	
<?php
		$this->renderBlock('content', $this->params, 'html');
?>

<?php
		$this->renderBlock('scripts', get_defined_vars());
?>
<footer>
	<div class = "headlineLine"> </div>
	<h3>Naši partneři</h3>
  	<center><div class = "footerLogo"> 
  	<a href="https://www.martin.com" target="_blank"><img src = "<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 39 */ ?>/images/Martin.png"></a>
  	<a href="https://www.cmworks.com" target="_blank"><img src = "<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 40 */ ?>/images/CM.png"></a>
  	<a href="https://www.klotz-ais.com" target="_blank"><img src = "<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 41 */ ?>/images/Klotz.png"></a>
  	<a href="https://www.adamhall.com" target="_blank"><img src = "<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 42 */ ?>/images/Adamhall.png"></a> 
  	<a href="http://www.kvant-led.sk" target="_blank"><img src = "<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 43 */ ?>/images/Kvant.png"></a>
  	<a href="http://www.seetronic.com/en/" target="_blank"><img src = "<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 44 */ ?>/images/Seetronic.png"></a> 
  	</div></center>
  	<div class = "copy">&copy; Šimon Raichl, Jakub Soós 2017<br>Běží na Nette a Bootstrapu ♥</div>
</footer>
</body>
</html>


<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['flash'])) trigger_error('Variable $flash overwritten in foreach on line 23');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockHead($_args)
	{
		extract($_args);
?>

	<meta charset="utf-8">
	<title><?php
		if (isset($this->blockQueue["title"])) {
			$this->renderBlock('title', $this->params, function ($s, $type) {
				$_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($_fi, 'html', $this->filters->filterContent('striphtml', $_fi, $s));
			});
			?> | <?php
		}
?>LED EXPERTS CZECH</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 14 */ ?>/bootstrap/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 15 */ ?>/css/style.css">
  	
<?php
	}


	function blockScripts($_args)
	{
		extract($_args);
		?>	<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 30 */ ?>/js/jquery.min.js"></script>
	<script src="https://nette.github.io/resources/js/netteForms.min.js"></script>
	<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 32 */ ?>/bootstrap/bootstrap-3.3.6-dist/js/bootstrap.js"></script>

<?php
	}

}
