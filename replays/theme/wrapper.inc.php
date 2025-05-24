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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.92051138339816" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9300442133306832" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6393811284210307" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.25882924347319425" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5967476932143914" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4256299391575942" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.17606435396116749"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.10720209525084501" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9883160346094657">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7201312026757634">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.35887493124729675">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7701577128259565">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8983277655474196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5413937169525391"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.241234340999132"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7690935673786377"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8663027458326316"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23202122852835516"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5908649498035579"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9671401212426227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.13792339135091325"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.09816024358202768"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3734313724396179"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5520065780299002"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8099990028805317"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.47553661264954106"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2929941405912959"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8032636638378905"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.873119157346038"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5430978057819356"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.14937227344785953"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
