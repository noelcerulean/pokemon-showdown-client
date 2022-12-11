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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2859429961081075" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3459143635972912" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6844174557112064" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8173239410470161" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.1368787721796474" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5685954558309243" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.03395756809217976"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.49134956531509655" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7261967419478417">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9812184865883329">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.36607779535963325">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5771261701461119">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7292075700333072"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.28989665356753047"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8217370672042974"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.15294715729432062"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5659575935427856"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.21937579658023343"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6961058503806152"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3777618308927788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2453832534775371"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4622210451373219"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7260707548604173"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.21957611653055897"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9030046941533543"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9066349524148831"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.36990515212613406"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5787969988440536"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.10933027481112956"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.31414662288936546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6484337963213143"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
