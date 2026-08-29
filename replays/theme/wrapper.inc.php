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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5224431741477755" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.20521984396568738" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.00497981181547158" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9969486943283505" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.783490087336628" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.15536392500368534" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7598610137667356"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.08684956443921288" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8778515104332849">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.022230738398711924">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.964708099136993">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9860444139538078">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9106224642691567"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3727407800472504"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9341147361974633"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.33105252914236827"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8693526261782154"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7148530768225094"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9727540689257628"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6987079367251539"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.891348682328756"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.41535404168353973"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.10674817355236965"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6239011207085101"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6469553864931106"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7159316006263035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.14628591745601538"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.39710878935346394"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.46917536517473124"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5929172683871136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6924477063998471"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
