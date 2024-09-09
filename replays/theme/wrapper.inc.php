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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7453390215305111" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.24578043103317215" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6689510547546356" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.337736101760145" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.22276982860547045" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9908091513629145" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3019446776862069"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.96610513689557" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.006989924158687044">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7571039457276842">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2608540667510093">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8027567037351162">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8596921355104759"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3262176821421452"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.730217600925283"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3649235610052919"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.18509313878549882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2606684196270064"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6890156109476258"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3335104769665933"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3994585886852873"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.08601595701321352"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6325276874315675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9713254343967226"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.08583453890776993"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.21501444017270255"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7514141661501099"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8717167566049804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3096096889182911"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9717426787504451"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6789819124809193"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
