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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.561200359573349" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8480002632982653" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.47146310566629523" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5691617951152024" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6683334419845586" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8056602425000565" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.11906379243485232"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8323439384428126" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.32916255256908933">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.30684003972203344">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.39416450176410334">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.03514637173367441">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8877049159932231"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8906768633694968"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.540536707797127"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.92387265101052"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5189201693096277"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6932211933378587"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7521715113822962"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2741604111359306"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7113647687900526"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6239412350287585"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7241497713974454"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.013260858945606468"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.29504036228797426"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3188274025385167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6309805790052943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.32294531292733186"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.23620245576012278"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6302914393631349"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.34181628128146113"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
