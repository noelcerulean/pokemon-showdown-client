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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.003144070613914307" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6875503192155175" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4135570344874895" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8607401873533111" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.06895072950507597" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6371776381889545" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.49906168015521835"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5249847596162134" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7283525782746334">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8491835470563263">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3202283619521791">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6032433598011822">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6674663281503641"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.640178749024725"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5976540528973575"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.05172302859273081"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6803974192238218"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.13274771110569872"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4774988842698169"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5859097010554459"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.49341482742494636"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.33824655284368554"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6660349975689794"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.990354419485288"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.1403235741500901"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.14556920304228615"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.10010029330456738"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.531845296156837"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9265829905415137"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8472592523144182"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.15610016237637203"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
