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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.10498391818023478" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8358841313407765" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.08922122130011645" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.569063582701262" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7857041723814153" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3225978659905049" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6198434853439727"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.854693185055311" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1587236434006838">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6213974270443647">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3632631205535841">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.41808577297140714">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.873941410456387"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7266810008926181"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1252529945595433"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.05093366984306669"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7473082031772835"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8231320832837508"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.848955715370268"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4097195132899618"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.692770123917309"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8377909733737152"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8835685872793753"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.031237507107572116"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.32344743190994674"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9702126595323992"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8349509831416932"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5920972500229742"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.10931889424776409"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6220313400604724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.42935882935687886"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
