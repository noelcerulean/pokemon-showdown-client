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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.37485938378942896" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.07499828465875957" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2247447321663445" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.539391711671318" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.04617496966792478" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8390311408101245" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7915492168289637"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7278968869927367" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4629876643665456">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.36467141729794195">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6480174726915193">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.569614101865487">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9666279271527034"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5455574901120874"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8579933231085828"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9004745141310464"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5473382106252551"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.25372745582598943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9775843874823325"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.10359866926521089"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.800568839633208"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.04395638276713254"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.17115866224733534"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8490596980743548"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8155628602293568"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.24754192996930957"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.22271130540637962"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.46204631779592376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.09666983408587515"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.19402639538101263"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.04157771341885175"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
