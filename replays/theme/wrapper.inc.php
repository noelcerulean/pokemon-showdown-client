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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.13696363980802384" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.06660935488736186" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.24024809134013503" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4262123413245671" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.718234527511818" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6267945145800762" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9012278249092214"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7426733937403733" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.29842842593808605">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3327369277037613">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.03988600684901611">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4364235627628865">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.578383439039168"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6977564436561812"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9852189843215462"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2604166326307811"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9821149436581356"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.08974906020898077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.25295873606904884"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.07532301798410046"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3453062828274227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.351841576979149"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6837746712779893"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9049648133553629"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6912579500758431"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4132979207503109"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.24446498215285395"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.028246082546819817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8455061772209012"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5921593051745786"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7271821451366478"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
