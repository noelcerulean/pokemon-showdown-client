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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8821263168961839" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.42908797522136566" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.47587334636979195" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.24942614688198717" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.39502503124969435" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9185106390388431" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.0956797108482248"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.0718920087566497" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5759254216503167">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2934620129677352">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3133035341658079">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.495378660863635">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6901750109588216"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.892064829415792"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7018202428503519"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.023136415563036694"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7735549734239886"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.07248494839183284"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6857197857513309"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.34146284052859355"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9837911143996454"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7128054028318864"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.09887091299681838"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4357055131108787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.25405814861767495"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5188659030680178"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.12294493366177228"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8635195822624249"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3031285479364325"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.1895002872135232"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.38885153763336344"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
