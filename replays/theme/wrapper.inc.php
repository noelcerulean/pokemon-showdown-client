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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5708906144756523" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5044610685238904" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6722290213629498" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8162357796821487" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7922722949615892" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.369610580019591" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.391883723493494"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6714868029414673" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.49958869084660984">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3760779743411944">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.15536978486842434">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.31922639450934986">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7190825708302306"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9910879228748213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4982623132746593"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.02561003189440436"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7383571583863673"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9345963396107333"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7506346192330049"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.11372795070464581"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.28248030943381464"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6782805886723937"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.11904501707365944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5313110630343771"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4049128228028669"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.07578587382631685"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.15987257479671335"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5297192018777817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5915168785053606"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.919780609897761"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.19437912751517072"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
