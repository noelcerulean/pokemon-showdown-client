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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.041159222532688" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.02667706924899127" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5431595478760369" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.10201008234773279" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.039674831193661886" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9709259163280834" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7763200048833161"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8213784603716852" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10317040167929203">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8215319041104712">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6803319929400882">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.39699078806160637">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.22102438803702817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.10553160597929279"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6193428920164752"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7493628535287611"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7776553511194226"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7289997052245127"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8003067604350615"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.496747498090812"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2334962524693054"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.09730069153762422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.06902673212873611"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.13247611032237327"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8770047206220519"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.11939679085160115"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.33494611628123216"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.559463353869595"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.38008317155384064"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6457763068105129"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7004793245837899"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
