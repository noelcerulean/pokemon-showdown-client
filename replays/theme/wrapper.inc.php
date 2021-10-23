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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.28395825343898995" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6902797951332464" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3555895849145161" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.30159087782656235" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.42018443236131" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2605871428131521" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8018687834914109"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.28907415547672066" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07345993329636857">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7733195560120973">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6865102613979366">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.10296445345137872">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7642158820658411"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7948056545579396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7573070270102491"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9267655498810619"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.1147377722686278"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.34091277762765704"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.48839070979456056"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.31889945076968407"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6348937219813404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7979817685626369"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2191169666345345"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7495253438539349"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.41658031072741286"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6732732621570463"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8270518878842688"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.20164886698594486"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8015214414738021"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.47530228226030613"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.10402437217435323"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
