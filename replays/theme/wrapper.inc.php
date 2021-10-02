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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9827275374864353" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.07249440414392616" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.36521323974761466" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.21203618949269432" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.07297044694241328" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5369323108212083" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9846278912346709"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.1761067325453045" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7384096887213059">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9796669980678601">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9122639513973108">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4705278180588177">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3700353872341746"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.06982031048673543"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.07507471570922752"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24013343435721768"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3761041527781219"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5271181891442311"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.199176648755653"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7604475573768992"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3757734971063973"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9197810040360823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5928756131370538"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8488691626102252"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.338290225750542"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5299453774924427"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8960912471355083"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9243763156398488"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8662762437044336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.25952559108548323"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.40909587920541957"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
