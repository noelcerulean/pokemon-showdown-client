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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3436559912711956" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8128991355033952" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6634968734457742" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.16063384007377346" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.11702413726136496" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7292528815347405" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5830123657452033"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6087667588875105" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.851247410965142">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.010453373481662753">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4108142491554212">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.33554294629741044">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3933581525893419"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8440319193893775"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.022065606446961095"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.030272108524356023"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7554239944921071"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.31747300531620404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5509774820712505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.672238998286971"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5569873673624608"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.15177512371848545"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.16108280487407334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8209276040111979"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.921945940266917"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1599147426256491"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6075863090776379"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.43397317658388124"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1335668371231049"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9350201647993102"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3492034170941969"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
