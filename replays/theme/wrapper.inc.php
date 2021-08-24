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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.1273293066866712" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8076427217109734" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.20512352644349718" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6620122581853873" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.22520633244865373" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.20255597076221066" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.44087582576426443"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5599684474832407" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3085380426983726">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.23398744792342385">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.30606594460673175">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.617816438705195">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9824360813725541"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8388944507608047"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.0972273599524398"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.208874223452866"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.29437844770899035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.020893273638370014"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.28053176861050955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5194519490237341"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9368357867901582"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7520930374297106"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.47831849250053593"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8848970348244489"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5360363804546358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.13212565071441396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5738750966311039"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.16996581513602682"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.44855353783282514"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.09188059662817616"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9778114105591882"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
