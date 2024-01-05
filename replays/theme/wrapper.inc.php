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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9501658190426787" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.879756264011198" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.004787334794080111" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5385653273280024" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.544904114489829" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.14228202719304694" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.23962182657444164"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.657793842893416" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6722948817354713">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.34962467756062465">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.23830470843580187">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9202851723374896">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9741082413984659"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.016521226124170507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6457802467997484"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.005690530000444838"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.43001816151226846"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.11760788479841433"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.19994738843865845"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.12704456490181504"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8667394883388286"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.23667571039166901"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6640295128049887"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.763426105500451"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5911459912446213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6912999026310347"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.69169039593337"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3837208020561247"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.36939782543353394"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.35547320901793933"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.43612258611604093"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
