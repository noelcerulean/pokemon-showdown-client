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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3950798995999718" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7076248452060203" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7406031403758175" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9425065489318989" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.38465168264632954" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6066482106645468" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9842855943418054"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4820257554844307" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.06734044180728382">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7517191964064793">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.24246870697168688">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3303167423821014">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.31125582996820067"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.10593259346159267"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1465569069641428"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.07793500153859134"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.28348976322308395"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6415193077918031"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8785364685170505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.02347150578730739"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.36175676923013067"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5155633508219715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3056760510212686"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.06927333586054285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.03624133334255775"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.34748724104447537"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6720578659881304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.368719299605903"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4543210892616294"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8890725121315537"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7113325753262887"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
