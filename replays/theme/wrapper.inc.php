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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9969842059378646" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7342923600266307" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.32601810605593107" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.181452009355201" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9439030348545443" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3397859973708415" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.09328302030667723"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.15187232568206488" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6109546038349156">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6067278542691859">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8137645532403683">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4075074360336408">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.0555964364820809"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5375683232993662"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8361387633066348"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0766088124649833"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5075763782396512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5969564964730769"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6273746163227638"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.0013002418501251167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8134369184037915"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5027312416837488"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5287284664028642"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.19468178890912702"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9839152458254152"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.88613357065827"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.44543819650477245"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7636312635959563"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7499376603206604"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.18837109801748597"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.12530227742073086"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
