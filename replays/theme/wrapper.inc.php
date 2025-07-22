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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2943379082176534" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.021615590266604423" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.04033056111460187" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2114155561517952" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.10101320108572476" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3534577441159228" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6877125444261232"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9872069464912854" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7283673243402138">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.413253210028492">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2074206949425681">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7188496463165437">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7855221349905019"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.2741680402516917"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.598356257232334"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8882400078616512"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9597956612620089"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.47267740212544784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.74109210867796"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5380064607670385"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2862671005025996"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3050639102781152"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6155701404320937"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.06617888971205077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.09597797224226068"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5646781441421471"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.17492862270756482"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.05625816533587047"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.43230942451411547"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6871675025454216"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.05763528472867607"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
