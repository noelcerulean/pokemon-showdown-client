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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3011255932333867" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5732831894816466" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7133219732351526" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5374548052356716" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.10162975129526597" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7083121718632168" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.08305665575061694"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6563637294309865" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3903288685988735">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.13337611118806736">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.31962979589862517">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2733540786668729">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9112552392212314"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3304824792587908"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2114862855266031"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.898752035888071"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.14932500852805086"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8756961971584241"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7664664993659229"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.40745297648438505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8764169570740288"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.009058063042055586"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4309281764367623"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.20730356549211582"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.719181285874539"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3884484686359855"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8462989347944592"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4109624414174933"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.37748155798386174"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3401097499429284"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5020782608697212"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
