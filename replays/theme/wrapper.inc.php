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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3582405582736592" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.02384207048625453" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.22253577659842483" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3411015764302827" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4089202913551433" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.049334788397156215" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7626913372400503"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6346904551137131" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7317694248952382">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7460965691971964">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.18937709377147316">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.1940947467435159">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8170588989195291"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5996032328787089"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6913253034868536"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.22908044752007428"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7818582367475275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.20108386965985625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6403581317046592"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.1962809128081493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3794256378672922"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.42247632109910627"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.07054521098717159"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9481422363631131"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8698195508227202"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.857141252360639"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.25698808023321207"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.17948957874461713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7075559911766778"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2635346481805041"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.13062606339676508"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
