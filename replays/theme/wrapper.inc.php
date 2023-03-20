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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.838641694725385" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.29698125401843" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2859208376714304" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6510614918644875" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6136801776078746" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4955021466175027" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.13638159686985363"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7605317377070131" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7356721591470439">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09044604457528771">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.17782432165366546">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7880883158116445">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.29563757028398374"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8035093917793219"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6422360103860763"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0020436539171326817"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.06163521631148461"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3607391506008959"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7256373066288828"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.45801324436992763"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6948940145811258"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8862791239655217"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6703801120630499"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.07096950492653487"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.09518070607844353"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.97272550475146"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3894529952268271"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.31352910909575504"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5916885903729834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.602364225806922"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6102928600454072"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
