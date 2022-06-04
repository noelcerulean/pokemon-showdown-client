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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.455909007087846" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.896128323221002" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8203251677883099" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3619778658084103" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.22635492279438885" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.20929495282434885" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5932076702489208"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8763504335965853" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0831412537016869">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6635083392246375">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8742431864905658">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6622189132374314">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.42543019104333446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.2284502978800933"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6662673931625522"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7381745782086142"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6266274107689598"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5877528837396699"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5467613627639036"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7620670639892722"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6098462142701575"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4153193483839732"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8812775722902644"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.48425435283823837"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8348656072538636"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.870971016917711"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.030814295949795234"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.032050110924542796"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.611923524848176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6333294169503496"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8747759915271152"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
