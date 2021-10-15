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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.670965538680633" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5758292048038289" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.1292734265842017" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5452684433684389" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5082050750921314" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.03692162082866979" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4574347727179606"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.44707108200735335" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8171392485259892">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5847677248244614">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5893866803407235">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.22436454624158975">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9779977006031024"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8930784648133652"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.94121634124399"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4794012824591458"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8455436612645044"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.08394464463835227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.07128225230373841"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6301722107748178"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5266337644941004"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7241557384292745"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.42198947989642477"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8408494005639624"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5157108601480707"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6629825807128216"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2673374907111967"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.007097950249530749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6819198034708622"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.36856042645159715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7353755592091094"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
