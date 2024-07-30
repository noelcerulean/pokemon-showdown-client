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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7969235298924342" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.037336123542667465" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.023386448827688255" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.08281911595599722" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6908362657225706" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9608476534836614" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2623392371609814"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4064744556605462" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9293362828010578">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6433375037009392">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4909100779138038">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5855195880749031">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9971599686200594"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.912845553396372"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7725906163644523"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6591329000743373"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2765716517928951"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6258196003114513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9607616751688519"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5568562575204496"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.569610585770717"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1006895334450908"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.40835760562446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7737393041009717"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4251942347037265"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7365132673989458"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.41469368081846514"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7174852346216256"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6025125122294939"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6235473985789621"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.17795922237599848"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
