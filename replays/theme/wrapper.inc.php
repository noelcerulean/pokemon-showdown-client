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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8081992976715022" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.09624797161421861" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9469533135096551" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.11770760496868582" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9990484805463185" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.08681344606639319" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5194663316998025"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4969876920659264" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16379115832274738">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.16840630666437928">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.04920960144154796">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5333734373827388">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7291541391672571"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.606158335256348"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5298733292752225"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7817951239035339"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.45156219421151467"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7412725717267257"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7726718241177322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.230461390205851"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4914295091229661"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8223250609336301"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.17261654301086593"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.970148447392869"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7597348792890639"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.12067343516209861"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3775783461480793"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.07053773676023534"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.03452354410644887"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.06486869336273537"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2552928147331843"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
