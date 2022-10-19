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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8557111649032085" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5609290662010493" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7869621058355012" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8028556757645151" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2876295211385622" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4587286642246966" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.32935278518792055"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4223844172051452" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2976878230771014">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9942656599960729">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5349223885232295">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9066811345490458">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6400673106394272"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.26797748327450255"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.907046682879995"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9722509776679313"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.05988301314426425"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1301063108254601"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8450220778060034"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6304178649999435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6131237623155537"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9942090227611406"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.23301307570245888"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.28553933474856796"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8736250014526357"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8109516320513819"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.05847205164795333"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.17829429208053593"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.21783984666578537"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7492363032307985"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7616639486323453"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
