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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.36035530592861886" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.21572657973007514" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.10627763732340823" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2307943213265391" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5409632522438805" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8518788122985741" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.48022105290107087"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9730766238074176" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2946942786313449">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21645909781202755">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.41483939726115215">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7567959562410966">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.520274064851838"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.28987789839559563"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9912041661922877"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5093821538257253"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.023819503258715624"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9637718735145047"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.01973568912550805"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5669978123953006"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.436816809685886"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.28129550393982483"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8301085174610741"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.0955446385611789"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5293069237171579"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2745059550279616"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.40269716401579525"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8415080263442691"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2526112724176619"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8544471624690528"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7496589599173122"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
