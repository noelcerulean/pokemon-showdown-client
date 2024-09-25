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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7116470852491994" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5409693190420599" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.1444292183354745" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3068827241844305" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.764093478175891" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7374029391545085" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9640597745627817"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.37932874777739367" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7858765567513049">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9632480585200687">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.09405507504511701">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.960684908284005">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8296292096464326"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.34469896261684774"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6157628381593028"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6456706974829343"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4841568782460841"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9344631664053891"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5612810978074843"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.12919309809894264"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.08641656895247674"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.42503325443846585"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.0206103919028513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3691568630918516"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.06531921564470577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.09524850098342541"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.06260908807931553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8452919498087896"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7345088070333892"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6163582772212282"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8281693410891946"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
