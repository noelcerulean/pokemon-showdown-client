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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4025817145979924" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.28546920542646026" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.051810400255815514" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.22929900833062833" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5774839688779281" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6421440900402418" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.08342374997513158"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7552656458601783" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10915479806805473">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9647406546024828">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8528725166634321">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8010642387643654">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.32368079089045443"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7636164858452332"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.07073348934363688"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9013334772797306"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7696234218895865"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.49209110357787256"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9793310474097454"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9480884624525834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.15529301006210994"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.04784057722197366"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6490964357894102"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5788921407192613"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7758353895120935"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.20921306644179238"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8598854761563997"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9315440691249284"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8366871943760581"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3756742889029381"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6585668467643893"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
