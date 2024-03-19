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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.011606053723780985" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8268397709311628" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5197095071646209" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4816434597246151" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.375696375228578" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7083801842403941" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5603239955467689"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.07661785637199992" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.646262910969063">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.10613854871184092">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9098462270074539">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8274247795674115">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5643078886493247"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6626593964179874"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.06176211969756307"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9290875548964699"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5239376296371816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.11950748664156241"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.08700878126311817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.154365084763894"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2595829310418145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.28374912465281477"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.30560806622747294"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7990253912638685"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.11763508463205086"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.594724451508323"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4497599550554514"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.37221881203985774"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6958711884477082"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5923396920820936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6328449880333844"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
