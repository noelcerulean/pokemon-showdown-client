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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.613312028693703" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7046123531650059" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.45558707311684454" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4817967096301179" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7405209179935162" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.474368423088138" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5384865166721575"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.10397194801756093" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6485644827184593">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6562385686750922">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.21610346000964054">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8870640339940143">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5440797056299556"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3725887794273619"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.45105357808894264"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5563064377998503"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8263373591917185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8517461456011035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7400529035127106"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.544257631606045"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5687142199444024"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8048062123216118"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3376672313933471"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7441225228977248"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.28988345071085453"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1299536028232393"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9969354366302414"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4162420877204547"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.05043883310324082"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9624562934129861"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.38735253812764614"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
