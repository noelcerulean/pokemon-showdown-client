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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4672536878239655" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.907703398609115" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7368197605878237" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3021187901768332" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.25265546951038664" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.08600117079462799" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.08097353673780461"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6757816894651447" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9285633955380597">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7439991229926648">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.22721665069203056">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.14924509935514352">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.20125331711355288"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6803786436157304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5609988058964599"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6600138588226991"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.30906264877851064"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5467767026601462"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4534645904515686"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2541632349592018"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9288753088554331"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9540837225005145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8198346831280952"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.29046445317642"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4122260744855408"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8663481464985323"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3128481974596564"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.47761118021085114"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2881879078137488"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7063124809991161"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9964185962517107"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
