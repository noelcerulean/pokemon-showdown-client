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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6528881539992599" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5395623912742016" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9368000937708449" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5206472728094858" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8586914172774718" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5277153074319358" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.13992363172528433"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.63777733201166" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.15021224640696462">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6184628137325054">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.668502339637594">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9058465746147215">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.32460118824066253"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.16229076565496414"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.21480969173543119"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7733379428087916"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2623571977839274"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7135657297855273"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.021578781313536632"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.1933540712742503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.023526215453351096"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.07700802609293023"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7327738619133559"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7911342841804292"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8400053559352643"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.33702305508356223"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6422738009750697"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6758945431433812"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5783092516493675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.10828985399622137"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.505111105263955"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
