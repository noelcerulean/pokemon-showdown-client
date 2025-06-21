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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.015968625072387166" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.23817612085062412" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.09846963074741" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7399968620087496" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.31260334898927455" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.769420643129906" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5089836226298974"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6556497669890486" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2424988874701286">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9113711642623057">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7885016344964944">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3307580296973234">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6363399324778953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.594954899521662"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.147282614892162"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.14824767039947861"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5728229968287337"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.755131418829659"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.22952537667658257"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.13351355202014958"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.0596777310872425"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9618754216200684"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9609551501837998"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9654223877472843"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.30050209806625894"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.19074768345460003"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3046227925271976"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7354262775839859"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8534635509200346"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.10804623252018075"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9035369337546941"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
