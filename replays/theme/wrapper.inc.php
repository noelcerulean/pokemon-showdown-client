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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.30547673764445826" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9712090894250722" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.13505632616903362" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9284709950480801" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9945119850953754" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.40485852423597124" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.175596441053524"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.24727802914745767" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2920180975920976">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7590571306018736">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.44054400564182794">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3598742404538062">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.44158176981066033"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.30480890123878024"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4226364284942099"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8049583342649151"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.23800046686222753"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8729994508916816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5208108903658535"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5010937277269822"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4691750393533962"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6865576913664158"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7925863402188018"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9381430843183771"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3405604874172963"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.07838639015550797"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.425316475270751"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5648983607201965"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.21556196144189244"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.38816997638323936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.03143600955820958"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
