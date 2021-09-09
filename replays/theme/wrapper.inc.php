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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.03879435950124677" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6601895036394356" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7195538398095693" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.19813372360373993" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.17127688291067833" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3352889179756966" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3199658616881931"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6523619458257992" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7516358152555978">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4096341206313716">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.11586126178688505">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.22956398860028537">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9138885506420977"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.34672970136128134"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.08150144196907605"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6752258393785238"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.36554955205455575"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8853973242914932"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3280814796466669"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8603013071273125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2267208945917767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.13521740057920195"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.539446302949397"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.49645350481201955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8985682814497706"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.43218183132599686"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6491971232943132"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.45544084721244826"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4290877280269929"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7958266525314677"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9407358573366298"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
