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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.48175100130994286" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5454946638489002" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.639333406162476" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.436974439688653" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.15334962830702525" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7186191079293485" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.35924539494096863"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5112085858673696" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4704449927783736">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9684834542557663">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.778461132563963">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7022652045708206">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5363198508328395"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.25550073193793854"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8272163997756878"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.438050256358653"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.14976591137955397"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.18392353942675066"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.02657140025977811"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.16784691956296172"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9014993659181527"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.04909166723074199"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5710359180647073"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6658813007112512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4883445824314099"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6126114482311054"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6193122264729862"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6064232109959584"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4895853367066234"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.025706515180411005"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.46627271762621647"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
