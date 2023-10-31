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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2620765775516114" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.741951562650363" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.42871386704738157" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.001084424773133641" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.1294107794056376" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2866681106479896" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6242914160607111"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3723551676964356" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08375738093010199">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8490844459702809">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.41678877483044996">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6651971459600055">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6588885077880915"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.023941876730032785"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4155875169349348"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.05727975206385927"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.24660102832990272"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7612339199567753"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8838269857279053"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.27510540504428227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7703692173118539"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.12893755843453514"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.1093075274530293"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5997418926293427"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.02799481402660331"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.13473340723368477"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.09971883744667775"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5205969506624051"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.26615033712159386"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3737002158541949"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5389432396925604"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
