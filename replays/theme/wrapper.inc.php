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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.427105057698568" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6324676661949593" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4946089620378904" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.29075796394435316" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.912811859219343" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7378471042662329" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7806002584270868"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.0078672735058678" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5777308150149278">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5921884805363682">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.14138330533422283">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2866781925767752">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7018433655579819"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.40269501407013464"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8916894425613906"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8049834134324265"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6248536955697157"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6741806256800149"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2658871968456529"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.984703788802672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.0839954230546569"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.47057635424960575"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.028729965295314353"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5854990383633498"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.280267218604918"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.24710940435433737"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.05880373341079026"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6041029295468565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6139014998977028"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.1434077188469507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9101847785631931"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
