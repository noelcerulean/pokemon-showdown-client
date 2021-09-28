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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3686460804231877" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.48312841512236626" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7313440585432214" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.883215681906427" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.32601047043580245" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8693259283381576" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.24205442520594556"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5647552553143591" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11874719849386706">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.35183248896656005">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9284675911906795">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6378558971544039">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5180816400576569"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5166109370383591"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5285866892392586"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.813562372387354"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.20618955970729624"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5062720054232974"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.771852545810634"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9298303919100965"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6183644187918358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.03705900591915268"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.14186772116347424"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.006864926276103578"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.2713717673470568"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.30878568240915705"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6304735741918581"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.028780211324314076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9819056230606771"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3871229435790895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9659936945232017"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
