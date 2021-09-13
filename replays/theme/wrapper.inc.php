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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7552458640868729" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7511341763324093" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.31881669932118006" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.44561062928629114" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9795754967691794" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7482131977383111" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6711151518420773"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9505069139717395" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.948220689848108">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5452831436365475">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1926496366367756">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9608375203097128">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.18703650463785726"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.032370426841097144"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5343739611059488"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6365938347049027"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8059055676943521"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.30356766332745355"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9596405580269798"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.789670997404986"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2008868515871276"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7419240794341906"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8820170682310442"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8131359275664733"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.20972871981691577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5696788375779478"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6873185688509613"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.36905817703679844"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3838531467096056"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9426445725540764"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.703226465302544"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
