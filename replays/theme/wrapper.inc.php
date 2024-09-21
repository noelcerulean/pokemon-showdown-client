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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.18113822112620315" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5151443462187599" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7332731587974888" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3307283432172099" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7878329934070303" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.862051159919905" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8770241688555669"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7848340220538905" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3483099272789678">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5393202434363202">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.886009358764291">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6423513650378365">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.05331698573476773"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5236468537966752"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9845260938786127"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.37143565950472457"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.1052190931231698"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.15174262371410663"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.08929934116069616"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6791148920868413"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6316769247421443"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2560438280415662"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.13756987594789738"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.45776761674575805"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.48769929021081904"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9254010790292522"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7143545331808947"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5732787591308375"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1495729695742365"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5562161481584245"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9947597191321826"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
