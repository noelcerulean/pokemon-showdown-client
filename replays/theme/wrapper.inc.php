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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.12224554894515172" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.0717926023113038" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7427210449413191" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.45402679986960326" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.23845934452060757" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1873163463376386" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7977866971703798"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3719776556569474" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6356780760576668">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8420119481384605">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9720475142493505">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7427226982345585">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5978070348260958"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9767243699761434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4609264242391018"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3356338562907961"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9472830084021959"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7609980580121865"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7393948496774414"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.040881807885361665"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8856978814628942"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7814451608694266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.05544091970779008"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.24253630273428595"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4206412264766688"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.052730840059788786"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.24653474697735933"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2260215337150211"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.050732140539607284"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5168488851930699"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4467271542817808"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
