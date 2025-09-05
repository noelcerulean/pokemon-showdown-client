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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9565470376233933" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4836201058603127" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7338944919429717" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4916085889352346" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4493946680766603" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.18218447288776307" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.41257515000787914"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.14986197714525962" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.38896276630279014">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9952757037318283">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7525061806609514">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8945426770642191">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8328592705416895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7175235187632683"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.048314503757377114"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9868367050380629"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.23485848907300189"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9107386067493128"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.0029843849960879965"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6156721657489177"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6174210325410014"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4451909598064381"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.271738250928268"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7104628689272983"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7098801461007354"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7322537578559929"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.49337928765511885"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.022544712293882885"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.08324342163571763"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.38066440167538906"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.15156249093842145"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
