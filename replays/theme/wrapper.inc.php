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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7982734498146431" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2076417226051217" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2527670533282833" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.15737931329827193" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.28666950837269645" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1479952655683614" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6021619991649303"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7143381876427148" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20768989334950727">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6101228146666806">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.12586838432359349">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6887971220361864">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4690955767783205"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4034516434391595"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.028613220923965565"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3762204648599363"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6045464267361946"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5121087402030924"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6415327479507107"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5673706187477829"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5998305885771906"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9992588718853712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.35655835132327107"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.22937245582659904"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6963720115492156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2627823109373775"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1866048419723334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.03969078076258836"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4976522152033538"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9382012511537268"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.45105266394193566"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
