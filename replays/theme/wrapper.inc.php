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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.43208611157162014" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5973190176996188" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.40344829169916396" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.060912601748079886" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.11126642890363492" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5920154472739365" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.67256798215482"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7375597392448561" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.09508681700805965">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8229259802833417">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8562972628477863">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.19364204633080995">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.33101794035093546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.11261480766450993"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7462519367177003"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24807639251174773"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.41711269798559614"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7688321553069914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.17337721701175313"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6443230268822824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.38268314739963327"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.049474929313634064"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6176387012242304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6096851893888631"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.1435712756516705"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.40682301714073477"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.32644154106141143"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9791316693233783"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2485709891698078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.061259960124286916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.668855858600818"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
