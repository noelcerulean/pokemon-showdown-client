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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7501577938202277" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.13298262467015864" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.47727866107004036" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.30991102357018807" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7123771324531325" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2519008784818406" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8975622746585636"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7647654295393485" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.09826305469114249">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5505388183812514">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4048854049488282">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5375562174225494">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.33389588969587725"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.07293388913397991"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.14855389382588946"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4336033294326973"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6008626002967878"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5081899709953652"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.824335549400012"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.45877875593889095"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.13577836971522528"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9927676513743204"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.38654968052446326"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5492059068244719"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.33576831016528685"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5447379733081257"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8427794022846955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8569855130351685"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.20778992472831015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.22083161345429358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.767553661847505"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
