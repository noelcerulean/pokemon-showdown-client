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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5229675156542501" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.16959817485461803" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4628062066364804" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.64307594005379" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.10706755970436577" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9000696361234843" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6091347220100212"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6662080097413765" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6499205339313423">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.42035846758733486">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4858262173999064">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8656556356438028">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.526140946643838"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6646623541852643"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.42239800128336413"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6679360181891569"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6605492158673751"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.591352174303672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7278878112226712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9006418938013283"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5450594235726485"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8528923649835602"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3156553511812923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.2913798988128611"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9108923615006386"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.14957839526589467"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9012605146337835"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6667658585403002"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8897829874201757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.14613847996323992"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2094297349627341"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
