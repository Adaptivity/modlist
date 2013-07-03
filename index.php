<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MCF Mod List - Home</title>
	<meta name="description" content="Minecraft Forum Mod List - A list of Minecraft mods compiled by the community" />
	<link rel="stylesheet" type="text/css" href="resources/stylesheets/index.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="resources/stylesheets/nav.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="resources/stylesheets/common.css" media="screen" />
</head>
	
<body style="min-width:610px">
<div id="main">
	<img src="resources/images/mcfmodlist.png" width="670" height="122" alt="MCF-ModList"/><br/><br/>
	<ul id="list-nav">
		<li class="h"><a>Home</a></li>
		<li><a href="credits/">Credits</a></li>
		<li><a href="latest/">Current List</a></li>
		<li><a href="banners/">Banners</a></li>
	</ul>

	<p class="n padded">The goal is to list all the mods for the current version of Minecraft. This doesn't necessarily mean that the old lists won't be updated, but they're not a priority. The only real criteria needed to have a mod added to the list is that I am provided with a link to said mod and that the mod isn't one generated by any sort of "Mod Maker" program/mod. If you have or know of a mod that's not on the current list, please let us know on the <a href="http://bit.ly/mcfmodlist-uo-thread">Mod List Thread</a> or in our IRC channel at <span style="color: #0481ff">#mcf_modlist</span> on <span style="color: pink">irc.esper.net</span>. If you'd prefer to submit anonymously or just like forms, you may also use the <a href="list/submit/">submission form</a>. Please note that anything below 1.5.2 is no longer supported. 

	<br/></br>Select the Minecraft version below to see a list of mods for that version.</p>

	<p class="select">
		<span class="section">Current:</span><br/>
		<span style="text-size:30px; font-style:italic">
			Last Updated: <?php $content = file('list/1.6/changelog_1.6.1.html'); echo $content[1]; ?>
		</span><br/>

		<span class="selection">
			<a href="list/1.6/1.6.1.php">1.6.1 List</a><br/>
			<a href="list/1.6/changelog_1.6.1.html">Changelog</a>
		</span><br/><br/>

		<span class="section">
			Older:
		</span><br>

		<span class="selection">
			<a href="list/1.5/1.5.2.php">1.5.2 List</a><br/>
			<a href="list/1.5/1.5.1.php">1.5.1 List</a><br/>
			<a href="list/1.5/1.5.0.php">1.5 List</a><br/>
			<a href="list/1.4/1.4.6_1.4.7.php">1.4.6/1.4.7 List</a><br/>
			<a href="list/1.4/1.4.4_1.4.5.php">1.4.4/1.4.5 List</a><br/>
			<a href="list/1.4/1.4.2.php">1.4.2 List</a><br/>
			<a href="list/1.3/1.3.2.php">1.3.2 List</a>
		</span>
	</p>
</div>

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