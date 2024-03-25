<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4978202960763678" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.03133856128580037" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.003371294428008431" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6927922635876216" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2277635986843789" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.14607139604192354" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5510786260586751"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.41961786295693937" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.45768363184081284">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7173144416432733">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4150597643057401">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2847276427841603">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9534601972979186"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.14316446721237197"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4562257102093632"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4234757702899412"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7040947287393644"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.42760785907873555"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4971104441409988"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.19075442984528035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.24728708753896567"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5844351770482512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3059153428832624"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6587439120901444"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.0035663722570524747"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.43619570502795924"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3759183955830556"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8197636447343226"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6895442015476716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8755396015377686"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9667125529903453"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
