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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.028919110496268496" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5828693350397629" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8311509222691389" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.09631375658595887" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9747236026038335" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.098578330164667" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.17246494284660474"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8458880100347641" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6455392026850895">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2521821545691394">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5439183036565178">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9662460372396362">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7793624083891035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.33602111360744114"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.26264450826751884"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.41919201538610973"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4487904731931547"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2913263231304495"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.36723737719315563"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9722067026698078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7695184210874018"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9971236900287339"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8803822821299794"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6513545180730518"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5697674555775951"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.58278234411101"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9626550612119"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.19709614720593716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.45192095251171427"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.07057575314788922"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6972545179871952"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
