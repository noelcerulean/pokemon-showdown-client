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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.38164904201639227" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.20165004790052965" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6854631888386171" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.31244430835387793" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.740476413181502" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.026217574613482064" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7101591895139934"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4519245330225621" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9569130179107705">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5061385663486564">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.15200535371676227">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7924886260212087">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7844551973305585"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9046831008377612"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.19430269252646415"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7365528841806694"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7563346981406252"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5187072725245585"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7459284046850745"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.0715892503201827"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.1410970132423932"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9474643192959169"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.28864259993129915"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.16704649555808393"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7446329433142169"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1736071966916195"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9190226167349873"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9838562295389461"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8592157119102766"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.13488745813881864"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7474792330335991"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
