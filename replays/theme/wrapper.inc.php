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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.49958660522583664" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.033849914883614884" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.10962300532071545" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1357769027680411" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.20117140453272775" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.30420963296836656" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3827091601675914"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.44472567632334514" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1549978514909247">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1858267159660092">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7751391894710697">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3935641708034774">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4135468953490882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.11700690580350837"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.613265145957175"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3225023539363927"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.28474420615732976"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7860221654769799"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5246533190723885"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.932471231443468"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.886982744517298"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8357775026573153"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.47038284622220394"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8525310119761049"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4547447963815099"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5718642753503931"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.20263836809315694"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5412899456350948"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3356765418417973"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8133162331251798"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.376982199657951"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
