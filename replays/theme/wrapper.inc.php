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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5978542792494443" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.32014081255693405" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.42492886082620496" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5517437085574188" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2841766668872028" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.20187198658343442" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7894508470988224"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5064834915611454" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.14737873433327797">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8960240192027176">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7746162445226332">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.876948566793023">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2631284470817432"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.14051502982928654"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9572628241361707"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5226219088017514"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.21786585776788492"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.947243005245352"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.29081029435181405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.617078560383673"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5755104147221617"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3372393068733359"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6481572840934178"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.03707921261694791"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7356427985958429"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2540603820949663"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5710082573148842"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6961747860176093"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.745156719741523"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6833170215100985"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.63581439243712"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
