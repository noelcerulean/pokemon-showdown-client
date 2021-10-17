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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8330749330683209" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.48886279173483915" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5877893260248108" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4114536652526959" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.14693413427696989" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7067937814721799" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9052094774498314"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.297450437876696" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8908990992055945">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3073835254267243">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.08852371388719438">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2943184465430775">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6514587380021926"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.06924235641077403"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.47661731275717156"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5750148261692254"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6027490438319361"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3804383762717787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3258626052455391"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.39622024790419785"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5908265864808984"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.11429750147403439"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7591781953146113"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7604822058738192"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9216407439813792"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1267145914864145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5103624207686337"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.07172545070996716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.613127952467448"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.008093184200895553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9635272511775854"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
