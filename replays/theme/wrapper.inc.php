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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.15626909398338684" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3915561963540073" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7498886528279864" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.06336710415242908" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8229151356111359" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8084044514138926" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9571509255889705"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.44314197195776184" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9943041182066534">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9306868769823451">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6773467947156822">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9971391839849664">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4235718540385798"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8220477408508915"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7630742179572338"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1273350947020384"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.245265705991349"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.20012368886809373"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9817883924780018"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.48058768520896566"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8001854776103139"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9738376506466631"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8671092877327533"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6740631499429113"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5386335815244623"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2723781321365428"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.25045592164126207"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6043658997237467"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.34587723115939406"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6979105996851289"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.14267060843001822"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
