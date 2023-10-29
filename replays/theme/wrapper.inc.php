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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.14885481661810984" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2781611629623675" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.21541468335558034" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.49840570219253766" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.22750967114706144" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8297825538412908" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2729632461890754"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2536781809704891" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0229681734651479">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7958360382689889">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.07762049022926276">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6873620113249108">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8541603565718505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5696403852480034"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7793116033888161"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6708698263049668"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8372455511333188"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9362704242902524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4960605236830993"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.023779105054147376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.17930189755355364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9258939954301011"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.505345732788441"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7779088818861788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3599327925475315"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9182452485326"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.22228545687079593"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7030847519792529"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9210280630847245"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6504596465702821"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.10830680604910792"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
