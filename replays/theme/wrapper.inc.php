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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6280677306365705" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2885996565314113" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5352794379592145" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9909048365701107" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.22362879552454928" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8198430638095895" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.39538759640512877"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7604419544607854" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07605120023806489">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.046266061276091675">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.12355983583542596">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.23912002579797198">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5614132495533131"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7284497064352455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6056956866772001"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4321314468203019"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7954663327202627"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.38402733546590073"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.17658955084446903"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6035045185199592"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.12500948798600597"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6889537620022681"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5946015158704026"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3719252903809076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.36229677300190377"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6691305231163891"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.17335925790102635"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6639949301438088"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.012370410695666578"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.38528046404974003"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3522444049149853"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
