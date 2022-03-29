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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.19682276876521532" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9149486856192361" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9666064005196084" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.27168540319818946" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5772819673696983" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5840286332084008" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.39887385086101546"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7192142361316982" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7118701228164757">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.37834017676064224">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7556915392971411">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4532940190486394">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6799175867078948"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.09206948316880781"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1277292488017019"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8562195208253975"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7245112969431033"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1290682867439643"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.624539378831402"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3740198469401015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7497513888843559"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9895769492812647"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7804775859515207"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3818527885460765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.18893344249563548"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3479117194883463"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5209147837446175"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6364241236129486"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1644926134799276"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6343319614303535"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7687099337159449"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
