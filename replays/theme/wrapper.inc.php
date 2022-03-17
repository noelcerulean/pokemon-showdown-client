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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.029614835362253622" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.34141484674012945" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9170660647630466" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8842070549601111" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.14705183227948648" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.026493639318676987" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8305933437307793"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3418591646149478" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9866533874024384">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.10329219017929692">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3535254878895384">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9905701565582989">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9027915299151288"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.10615813808995611"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.22510335108443558"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.39560643201382306"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9499981030041069"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23241396855580043"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.09828815674226754"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8824031072202296"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9167103852991427"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2304538719902236"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5422673646843266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.25686084568763334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6920482489401694"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.14567492419377626"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7037779243153262"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7011516253094014"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.25211218365809196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5452333057197749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5866241889077728"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
