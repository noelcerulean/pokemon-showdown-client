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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5957839560450813" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7533873644230569" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6860151252589146" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.11396294200638146" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.27726566245970985" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.24169831259053054" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7678351102913137"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3594190652033291" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20675261900718445">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.22822920349847764">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.39907257662183593">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.19691305522507152">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3392364990893677"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6288230141115683"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.09209381122799298"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4838474750081927"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.45077718755064455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.061701897271589035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.0253975960328785"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.04163694562790243"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.19053676581790024"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.011095311828321908"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.13277185891171772"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8189059433237997"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7407445078707813"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5141651554201483"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3093411257465881"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.018852923187786086"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7692886065111508"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4978077110493033"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6222628526384848"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
