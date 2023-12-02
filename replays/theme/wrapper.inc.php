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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6411523556122805" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.42186557712096096" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.09932528002701857" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.916668485953666" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.29160317470325614" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.34407031168102" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.35392263911644295"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5760567867949153" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7838109737593539">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9371837024605978">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5993760517962239">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.39217735221330474">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9614706091661549"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9603672510086616"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6141224646988812"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.18506506437160763"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9295018164643818"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9397188657943838"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8262440929648547"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.21385944898564735"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.605169594214799"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1572319884200497"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.15581531324987097"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7381612897661156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.0334364863022556"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.07990451157761824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.891205188290541"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6720996333103393"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2911733401175485"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.40350300157914565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.46281544665301966"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
