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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.03290405109137651" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4459270921590117" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4415264182098064" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.40823548085922146" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7748977988271806" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6041255241616621" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.35567438972998033"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2818141624122439" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5724329360009335">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.45752736160443574">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.28365989738069275">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.40810708225176295">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2851670281470382"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.25878589007852826"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5455742481094219"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9557283209868737"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9571271585412817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7294906056835155"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.28280306228455454"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.0723705144419835"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5651745546137843"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6312617229769382"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2515855363215671"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.48957867764830665"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.13901032444277472"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.17584269669714936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2958425605583632"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.1954932607254387"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.28618945970814424"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9496119657152804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7099473550428177"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
