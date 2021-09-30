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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.43724287300168574" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.07269213827548437" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9977369914401639" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8231754597719887" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.20929456887156705" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.08959960274018064" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3359025076607516"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2688797748544729" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.21247341078624626">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6657248553186621">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.12419563707111658">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4173452702539311">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3833942521495146"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.054989698755505634"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2103971661587034"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8473476037115728"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.33975443048439513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5251126328884064"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9749651146136482"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9470076028186483"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9312271948959197"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2076461506725502"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.698891927325028"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.865298909263643"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.2769482329177726"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7229135196880563"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8603123593126831"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7693540611542451"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5204984685231182"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4749852681188911"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8347288561480277"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
