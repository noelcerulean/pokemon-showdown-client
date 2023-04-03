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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.37805869439487405" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.39057600229118195" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.15878154876068784" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7117668378329964" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5448807580081683" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.19293737978899572" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.1088894167794936"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5107663461348386" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3921469437232854">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.517454670199549">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3647026705021006">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.20109902802797497">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.34134640976176733"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3773474714265155"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5494250931599745"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.42527467053239043"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.36984571760620466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.05253365589710168"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4434439103812242"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6013678186651643"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.0909099575130512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.39394055792931737"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7609411111655404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.49310086303700174"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7952607233905293"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.25026213644850026"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9722164214553017"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7177087139746114"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3519935706945696"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7222036520354489"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7721778337492367"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
