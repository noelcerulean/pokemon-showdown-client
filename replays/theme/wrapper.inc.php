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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.414240730904297" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.30020061900950035" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7319287795360254" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4818316161972078" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9581592331222901" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.215886321538457" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.17609476256136092"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9146249221886251" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9350865074991914">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.15516783436050763">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.968851350651676">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.44100018560627485">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.060108605540821314"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5333929020170307"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.38454221450627535"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8327368795062229"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4365881497997435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.41381535819814275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.04446197174944899"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9661536914572495"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.33162422888773513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4371803758473771"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7734228367649696"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.0993153692559916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8593844178017407"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.49287828582057047"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.20932371529436944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6050194284649717"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3795865542932868"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.24587092047841197"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4228780509954757"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
