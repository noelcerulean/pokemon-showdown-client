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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.06876884659366533" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.17131133824981726" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.32633512178191904" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.015389023175951033" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8850665925595782" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5772983369726317" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6915371121481295"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5880219583810575" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2531052116748622">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1325639447546043">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7855112143793612">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.29525120715896724">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.46952664604841265"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5639657544805219"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9380972499306675"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8141933307813505"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.36395043012833894"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5066890776852602"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4117761505622033"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3617363815555763"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.0883073971702022"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3638464320188035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.45302071807843314"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.44140927487027826"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.12620379157304673"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7038278455746763"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7731290243307938"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2336874353187508"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7812494308576654"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8563008490526764"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.727382380043843"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
