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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2541771609870118" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9943277930313934" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.16337044085866959" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.27985615328757873" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3385311629968961" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.33471635199871685" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8784144985725579"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.1317829586566921" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.27240377891464607">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5889160571455805">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8273470405003951">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.11018328053420046">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7016356570675248"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4533420631868381"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5967609134193887"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2254445354877168"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.829998786112734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2530469508122819"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5403018141734162"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.059824558801405914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.03616339539407076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.056488279436390565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8994464732060785"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6929382501694565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7034720048267149"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.09932042477846781"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.859198506251386"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.16246258237193323"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.34514196692915755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.024615224219890264"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.20032029476357427"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
