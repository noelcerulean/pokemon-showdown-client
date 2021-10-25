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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2020374156322453" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.03865533776776364" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.18382860222948705" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9092914826132146" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6236038619769377" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.012397224228367865" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.13780567041160463"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5856750856720563" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6434973562528743">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.10845734671096063">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9665537216054456">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9514166261718671">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3904569629028469"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.19357700735234284"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.47049572041031884"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.45435312281997775"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.01022864074237062"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6231182707901071"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.18039795160476046"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3263010839619771"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3125748846836005"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7545158577475901"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.07689195990021225"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8979217071730095"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.2508372917212043"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.22768230719132165"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2691353850997238"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.891719890250124"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.0767776607648063"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.30884417562697886"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3394376087573383"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
