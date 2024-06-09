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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7659523456553052" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.15680185550129555" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6967821560419889" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.24610586709784155" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4981054006548835" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1506965635766322" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.49347521702942654"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.17755633113131397" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6747378109057873">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8095374474984371">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.14828482570654056">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.605642848537596">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7022872032681644"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.18733978607614232"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3970806568900538"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.10539666594184216"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9786687520507082"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9388660267736209"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6756095467848495"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.29277087299510085"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.43049735212633333"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.07630839539157219"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.19571331872358555"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9774019548888582"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.17250810750623757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4802836984996057"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.384572888102124"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5801945384722305"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7899170204991912"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8417723820346843"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5329050520269676"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
