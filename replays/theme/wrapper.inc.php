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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5396221532467391" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.19065096421648664" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.212200468742064" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.25115171393415436" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.46311187771610585" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6811288113741849" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.435556139476845"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.16950046025692322" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8965497768377979">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.07823656262008005">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5642782905924046">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6871981823928708">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5419767746467421"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.42435136900278625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.23262379950392154"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7364570999764721"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4819014055408972"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7511019742192659"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2536460142500212"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.01318770822908788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9627101076671234"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1396077678823633"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.34170979387158096"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.2821276471925147"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.085101847789679"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8146367731908379"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.11129115206270623"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6300602470189178"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.008109539349068662"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7321956270200916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8930153092344526"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
