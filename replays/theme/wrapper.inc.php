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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7049450126433809" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.36876118419208126" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.25266273820046314" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.09340596624105202" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.12576299508121758" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5490293183070236" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.01011248592432934"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.21086212800739412" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4808075784159984">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.02801111795747646">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7357940377574548">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.22768455801741183">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.04314011946199936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.1691738488376624"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7904215949179219"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.317451439950476"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.26607535733024124"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.12717976693087985"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7628799266521102"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.840172911454151"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.42278569582083336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8670214893563741"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5596256547383445"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.07741013234716321"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.03290135646046788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1807255996265702"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9857616249700947"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3110728998377099"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5606586022762279"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.37873978950730836"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3042530578417615"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
