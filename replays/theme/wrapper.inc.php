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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.35260207215937434" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5596860069384764" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6438246303340405" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.20127142596304415" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9892907636628196" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.451862423407027" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9794871156637168"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4510135624572116" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2936410619413321">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.37091927541243663">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8655286767968571">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.041656915938118155">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.47875412447050003"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.07352261383492831"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2671803441919274"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.01936391846298191"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4173200327308768"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7970660488004364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.1032727643209852"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.47742470180033325"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6764712098039602"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5540777867678899"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8014253293496882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7453670493018822"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8787115304902415"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.0371394565494636"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4400192023452405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5950150347602716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2188977976295876"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5286084595317819"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3665205103158913"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
