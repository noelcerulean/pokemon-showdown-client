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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.643980707564836" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.18961687503355806" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3645866853268529" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.11776476538731218" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5459282140683068" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4857963219861321" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6173009172121287"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7953814462601112" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8669224420882202">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1962726285243548">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3612887503937958">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.10618322595362129">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7356793857304766"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.04417737396727128"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2677739800833532"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8066673880712634"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.13914652614456102"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5869211532969567"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8075019695811931"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.45960488045331305"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.42535553497984724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3890028571933024"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6469987234160872"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7295170412212884"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7105941374491449"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7961321793982961"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.25424054227910275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.08493156702922766"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9452248389453668"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.445545981775334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.11384923700908245"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
