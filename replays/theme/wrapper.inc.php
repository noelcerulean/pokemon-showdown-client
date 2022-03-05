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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7919899211257264" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4194935722698474" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.244173481766214" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.09368470409091145" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9284767828815783" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.12905154901619387" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2939017450050967"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6399438129297872" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9591177838860074">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.704502926210832">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5814497270824899">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7121345506999228">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.002255097970729203"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7215783663063895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8998764001089998"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2784645676989317"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8192338276097"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.921811281258921"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.26296990787432106"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5666737825303032"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8225555423762181"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7235531782360911"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.14285425061082835"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.450000516422125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.19265823389835823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.05359188460196185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.980080577567944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5522306533534507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9734899469457019"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.18098215490452185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2982993848841682"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
