<?php require_once('resources/scripts/tablegen.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MCF Mod List - <?php echo $this->title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Minecraft Forum Mod List - A list of Minecraft mods compiled by the community" />
	<?php
	foreach ($this->stylesheets as $stylesheet) {
		echo '<link rel="stylesheet" href="' . $stylesheet . '" />' . "\n";
	}
	foreach ($this->prefetches as $prefetch) {
		echo '<link rel="dns-prefetch" href="' . $prefetch . '" />' . "\n";
	}
	?>
	<link rel="shortcut icon" href="/resources/images/favicon32x32.png">
	<link rel="canonical" href="." />
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top ml-nav-blue" role="navigation">
  <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/">MCF Modlist</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li><a href="/"><i class="icon-home"></i> Home</a></li>
      <li class="dropdown">
        <a href="/version" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i> List <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li class="dropdown-header hidden-xs">1.6</li>
			<li class="version-link"><a href="/version/1.6.4"><span class="badge pull-right"><?php echo countList('1.6.4'); ?></span>1.6.4</a></li>
			<li class="version-link"><a href="/version/1.6.2"><span class="badge pull-right"><?php echo countList('1.6.2'); ?></span>1.6.2</a></li>
			<li class="version-link"><a href="/version/1.6.1"><span class="badge pull-right"><?php echo countList('1.6.1'); ?></span>1.6.1</a></li>
			<li class="divider"></li>
			<li class="dropdown-header hidden-xs">1.5</li>
			<li class="version-link"><a href="/version/1.5.2"><span class="badge pull-right"><?php echo countList('1.5.2'); ?></span>1.5.2</a></li>
			<li class="version-link"><a href="/version/1.5.1"><span class="badge pull-right"><?php echo countList('1.5.1'); ?></span>1.5.1</a></li>
			<li class="version-link"><a href="/version/1.5"><span class="badge pull-right"><?php echo countList('1.5.0'); ?></span>1.5</a></li>
			<li class="divider"></li>
			<li class="dropdown-header hidden-xs">1.4</li>
			<li class="version-link"><a href="/version/1.4.7"><span class="badge pull-right"><?php echo countList('1.4.7'); ?></span>1.4.6/1.4.7</a></li>
			<li class="version-link"><a href="/version/1.4.5"><span class="badge pull-right"><?php echo countList('1.4.5'); ?></span>1.4.4/1.4.5</a></li>
			<li class="version-link"><a href="/version/1.4.2"><span class="badge pull-right"><?php echo countList('1.4.2'); ?></span>1.4.2</a></li>
			<li class="divider"></li>
			<li class="dropdown-header hidden-xs">1.3</li>
			<li class="version-link"><a href="/version/1.3.2"><span class="badge pull-right"><?php echo countList('1.3.2'); ?></span>1.3.2</a></li>
        </ul>
      </li>
	  <li><a href="/submit/"><i class="icon-edit"></i> Submit Mods</a></li>
	  <li><a href="/faq/"><i class="icon-question-sign"></i> FAQ</a></li>
      <li class="dropdown">
        <a href="/other" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-external-link"></i> More <b class="caret"></b></a>
        <ul class="dropdown-menu">
			<li><a href="/changelog/">Changelog</a></li>
			<li><a href="/banners/">Banners</a></li>
			<li><a href="/igml/">Ingame Modlist</a></li>
			<li><a href="/history/">History</a></li>
			<li><a href="/credits/">Credits</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </div>
</nav>
<div class="container">
<ul class="breadcrumb hidden-print">
	<?php echo breadcrumbs(); ?>
</ul>
<?php echo $this->body; ?>
</div>

<!-- Modal -->
  <div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<?php
foreach ($this->javascripts as $javascript) {
	echo '<script src="' . $javascript . '"></script>' . "\n";
}
foreach ($this->lastjavascripts as $javascript) {
	echo '<script src="' . $javascript . '"></script>' . "\n";
}
?>
<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.min.js"></script>
<![endif]-->
<!--Google Analytics-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39433845-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
<?php
function breadcrumbs($separator = "</li>\n<li>", $home = 'Home') {
	$path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
	//$base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
	$base = '/';
	$breadcrumbs = Array("<a href=\"$base\">$home</a>");
	$last = end(array_keys($path));
	
	foreach ($path AS $x => $crumb) {
		$title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb));
		
		if($title == "Faq")
			$title = "FAQ";
		if($title == "Igml")
			$title = "IGML";
		
		if ($x != $last)
			$breadcrumbs[] = "<a href=\"$base$crumb\">$title</a>";
	}
	
	if(isset($title))
		return '<li>' . implode($separator, $breadcrumbs) . '</li>' . "\n" . '<li class="active">' . $title . '</li>';
	else
		return '<li class="active">Home</li>';
}
?>