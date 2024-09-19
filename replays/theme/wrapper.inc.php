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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9773240345041443" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3145793774972758" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6431648796998322" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6746892149497421" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3312735989753022" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9648995471468582" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.07465644963859641"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.23562727510105752" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7941455710746843">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.42599041483982303">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8338513910852123">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.48275467936660976">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1579239995033177"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5481864063433672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6965797051872942"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.12085463151509379"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7312606682842788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8636690940957856"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5191812379119953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7578416596836692"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6871226919165592"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8451212298810398"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5801932677734993"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5065169099059934"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7311783647202765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7637673583881959"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6499383294915861"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.500086533781565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5339457610812717"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6313153100943916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5007574153660093"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
