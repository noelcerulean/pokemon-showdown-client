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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8883999692548619" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.43606561501272956" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.025098746008156425" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6064205108910632" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.07880932534697682" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9421516052136205" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.15793905288366794"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9638362153855098" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6142999248438916">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0032586358329482756">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5229864234378472">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5828870609687617">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1410199649463677"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8127519344874234"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9123047727731874"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.13188840093630616"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.07289562881956302"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9894327885146457"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5247971311825039"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.1040925242552797"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8251068963557979"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2741013242414263"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6165041964318834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8367403809903264"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.14628117465540713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8677349301972952"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.49693376030744263"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.952354112104838"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9821413120219873"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.38408200952802174"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7126173001323997"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
