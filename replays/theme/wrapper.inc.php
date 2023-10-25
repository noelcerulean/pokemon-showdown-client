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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2810945212970595" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.583901589545335" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.11511585859817619" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.567874443431412" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.04932361874714175" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9173791963136411" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6662431121653642"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5120273545684166" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8171185221079327">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.018718402338037787">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6257657361390105">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3620541060069362">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.408827254645334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.78536534171665"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4706539930080247"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.01981076057471043"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9476551487881539"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9410426651074992"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.03807092262773892"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.19915339894375794"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.008867171130421125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8955793185052561"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.014913665510247087"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.74032823512172"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.617789879645686"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9088036767317829"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3388394267498491"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.911239545500993"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6148144167909024"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5341172202485689"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7962624868529018"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
