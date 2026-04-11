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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5733952612675122" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.045670666147688" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9774481520314351" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8651894540351943" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.1795009424473697" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.407321405030467" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.32530559177923934"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6407773043191276" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5036678871817517">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7349638458674599">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6960502336272647">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.45633977407925364">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.31444115499769265"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9919786273381146"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4085632288383174"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6703105266149472"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6420847658613025"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.030501369401729095"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.1837176739228712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9131136839408418"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9757628734263741"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.20031525348461443"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8795117343171279"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8466221144701722"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9389543280790857"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3342455017600314"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7935294429385014"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.05849332376333227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.43092580677432757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.09692388422351983"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.393185147154929"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
