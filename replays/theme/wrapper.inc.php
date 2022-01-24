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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7746085916017968" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.540792248474214" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5961028135642747" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.21945931518911932" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8779003918353478" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5991934845018969" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.43434144133714536"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7213658462254315" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.01731882428615661">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8269677681093519">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7317573337626333">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7076091606972019">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8848236710517174"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3227493787299913"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.15073103762266893"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8920231537529164"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.259855330122138"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7763056011861351"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.13448496457532588"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7751348180338742"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.11010086172112765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4607382638827302"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3026833704825269"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7273414743781945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7799335945863151"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.39572454655124756"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6297310608530411"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.19622027420545707"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.13411291751256016"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5335865733057794"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5948564049409657"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
