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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9288693711503049" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7724561224599911" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7454030023207139" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.12181465526026103" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9796562619577973" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5815731813280984" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.07981925935750356"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.365325315410302" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4107293043331872">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21726489218199907">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7817310796318269">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.0785306597167692">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8649650818754748"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.12524138832573706"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4593778294369917"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09599355469477566"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.06049458797205731"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.06807267969025776"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.020660293914871897"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8507770066649392"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.47865493877217036"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8872828783370175"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.39305472243483197"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.2141139141379813"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.923364012587035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.08440361133155871"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.24664303979340874"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7689090885390513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4301223260859266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.665040016427181"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.022083492009746353"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
