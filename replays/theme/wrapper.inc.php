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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.39201485072872555" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9913221479182117" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.29937301075487177" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.887290754475262" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.14012057164006753" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8282007076761309" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7862918668253127"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.222360747695735" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8104781205143508">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.15410266113191828">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.0908161398109979">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.19809103150871343">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4175562036348712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5675477725891171"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7732264093873376"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6102567652724677"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9601643886537263"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7989939029766138"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.461006201460038"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5284854461293871"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9175595173929048"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7445612937233008"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.11365655502240957"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.06317719243675102"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5680826438349578"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7086473946257477"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7193481457126598"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5236253194790434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.34383265961885323"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5859344359314942"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9534925491949973"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
