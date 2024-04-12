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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.43561603369183066" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5256501517834371" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.008507361272613867" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.779810459872132" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.44804820010729984" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8503860741045459" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.27009498241576924"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9982074960660128" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6145087666779447">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.045741845590733465">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6049675998414012">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.37585043225663894">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9937738201389876"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5835225634250414"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4347038289101852"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9142701700995786"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2659284776727673"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.33999800359779386"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3175891946675009"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4882809495182179"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8120410304172867"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.04351731773519396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.22826838431809304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.26055687107142056"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.07576780567189934"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1499006112746044"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.08247508115785895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8165733675852975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3739892969211136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6951138075774974"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5573163483696142"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
