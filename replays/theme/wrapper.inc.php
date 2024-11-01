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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.46418085771760964" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.13298375350634806" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.23073273143166562" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8170108535521683" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7776829214428476" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7824046455680598" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4630263419047831"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4290652065904479" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7382634466649425">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8869347805878234">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.08130673092152896">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.11337601153515764">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14937856044544118"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6657570085163316"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3340993941918582"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.15600882102588365"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7649716966019349"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.01983366963166011"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.937179823023325"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4008608518169139"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.48442995057490634"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7637963113763964"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6312925955708519"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.23686139225628766"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.37051817956057365"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9815077303147968"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.13472539553799323"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.37171048208493307"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.18978837772908808"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.681491346003126"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.49765716564062856"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
