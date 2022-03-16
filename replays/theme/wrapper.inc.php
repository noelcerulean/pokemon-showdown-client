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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7661928171451178" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.39956286993755485" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.15830010684110207" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5036661393241917" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.32730698386910273" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.30607874569503823" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7894923498632502"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.32666681329859526" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.03152031529634702">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1831666777542844">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.42813113864331">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.434219619417771">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8178944381989066"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5063354074226152"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.052375240991602956"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8908409369053374"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.26953645627955125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.35998129712535043"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8434443244697698"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.006974642174317758"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9468234946281044"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8165887755487726"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6861333310636053"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5677444860231586"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.12886096446308404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.33295940076312247"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.441337587883716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8647489513522173"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.008448801793366156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4262449379740503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9501132499671634"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
