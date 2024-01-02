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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.07390686172990657" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.08624602963663963" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5838604651077366" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3712837530473172" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5545717810812023" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.641068513929671" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5387057811275466"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.44392435081067405" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.17444775481543506">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4131301887379517">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7282059188035857">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.858274940457395">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.817274295209304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4354371307267739"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4272084027142369"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.19394423976174835"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.30420983634268994"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.03416829787892506"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.24874442580476286"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7650530286053825"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8667692102387528"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9394624152892088"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.07699301783903967"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.21610675212286568"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6925812464506187"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8076814752342982"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3216616128654697"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9525399726221215"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.11725053168938615"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8966655770020633"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7434392300741883"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
