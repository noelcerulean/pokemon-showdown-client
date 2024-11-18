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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5443011772566373" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9419759750329988" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5575685448983938" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3912069926727946" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.887425188769744" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9545529425772619" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2102136773233041"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8192949370426581" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6002573360597452">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9610482147259314">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3162949380161142">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.20861990172076106">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2733068617088452"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5312293727801092"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2250686863402327"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5947869001594726"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.1404021392460808"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1001859466032744"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2727059719704781"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.28251970752694233"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8801761776267643"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5626520184044723"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6767260862527322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6006480031357042"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3296245786398686"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9384898235565458"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3374861414917478"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.07430466503195943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2518750452911447"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.0577435929865433"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.40420534172254263"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
