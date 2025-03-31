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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8634983801262788" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.43013216111848607" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6453157766376112" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2861154685105498" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.768311400311741" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.20774110808281998" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7864840295114246"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.32663699235038957" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1463676391602684">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6717555360486562">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9587823729725027">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.045133034245854686">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9394491978470485"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.192851757013492"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5349090443026618"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7023340512478307"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4910903305788259"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.14903425067915355"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.21509211350240953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3701303377593561"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4966503488628047"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5781623972120911"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4633197326809564"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6782832514689232"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.27277703532897957"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.18621966608620255"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9887146462659946"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8250118501089485"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9007973413484762"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2005273136247001"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7514191966366564"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
