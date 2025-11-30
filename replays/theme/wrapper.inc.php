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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6177125333013436" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.20795284015436555" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.21797151715625462" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7627601333454128" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.33551462061035076" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6258088604467951" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9796010326064386"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.48123981140183103" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.15870304840275584">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.03086296676474709">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9426287254726438">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6478834540711547">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7086288788763446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6732803270844159"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5557022800024294"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.34025877202972454"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6678730787832989"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9246736845627548"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.531594372515217"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.36262645966212204"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8176319625121775"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2441336754610568"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5528957111041151"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.12595326630111958"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.0027998299406164495"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3291748113949269"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7529972289775553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7306654674686108"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3198126750495114"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8965082239924371"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7856658089432402"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
