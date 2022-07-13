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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.639224864013765" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7874362471589944" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6154708823853194" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4656020566681853" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6318915241811032" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6117552865353209" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.0040821117941258755"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6249970209027547" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7119949053472641">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7303755969104735">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.27101007563082335">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4479332627719361">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.44131282307137787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7261746803791724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.72573380956352"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.04196811214440088"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4106781307304386"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.48930419928982105"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9053140821117314"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.18023570842708936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2620559385818053"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.015053204695989253"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5497890470765454"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.950226841563848"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.42988313079698415"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.21564694236837445"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.596837730121524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9573563760711872"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.028390218787018195"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3859589773339167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.19404212578625035"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
