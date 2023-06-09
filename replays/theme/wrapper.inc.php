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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.824653214409603" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3601928445202467" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9102323531066889" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.013095225402211419" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6884885253938664" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2445963088093306" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3251585801495298"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.657889100626732" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9686137496638854">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.30086375148902">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6327239400854223">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9009599733880997">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.569579105156081"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6625195587701396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9071732537878723"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6911485126645052"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.25868393244066246"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4192356586090227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.47483197641231123"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.062153949032640154"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.11265831193454878"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3369688119235119"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9185351886289954"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.19294006191616364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7696633484617854"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3133854439189492"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8919537595464895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.16426296456559863"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4571772494014221"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5181990692729839"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.04418849709094097"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
