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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.03759070645884499" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9054872784891923" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8064183146353912" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1355863861002935" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5277637745590831" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.763798045995564" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.42628087555088845"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7511183539789317" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8417196842261985">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.621967021395069">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.48774960107180854">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.14775750330418513">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.24861280930688867"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6802899485065772"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1905924832836805"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.07507509637344101"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7170334553759725"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.36571561971554223"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7035005530503999"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5457991819096106"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3427819499655935"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.50225715195565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.08253559584048542"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9092105019093359"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4004660376368072"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9405131929157309"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8330090357955435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6078302553500943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7711247856252585"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4885924029638842"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.11346812799530581"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
