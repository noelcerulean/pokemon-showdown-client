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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.28052123248662" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5735275950931049" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.475146374028234" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.730271258164052" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9774291782679401" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5724557425266366" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3819873377167491"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8781952949148615" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.73386195058746">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7128293427901875">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.45344620649224243">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.708480413625572">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.06877241321584782"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9140582444270229"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.826982995411508"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7078114224017096"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3425411215120864"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7664921464079439"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4258733981083802"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.0011342360901123172"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.1486118190351149"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.29492037615054434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6582214562032462"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6637134897019057"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.25652483141231386"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1822544070509029"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.14968553619536396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5390241746873301"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9053538182809358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8402541545854927"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.19797921294501264"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
