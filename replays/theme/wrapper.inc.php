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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2799995041062997" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.21154993512396225" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.26895716290976046" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9794804492507927" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7268681546866878" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.32449377501522214" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2775505399549152"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5608412751694964" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3292154804109175">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8315179418024023">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.25824639318492504">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8329395372311297">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4790002022498603"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.46370039557405907"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.23377313834924984"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.19871383891462524"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6390982468684803"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4930518788714051"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7605910445947932"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3432361983299206"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2424933516814043"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6076172526347927"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5186605608876398"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5128536950802747"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3704346834426542"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.28687686702689397"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2666525039372869"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.495951348808787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2252290263377077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.29853928610651304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2386410575456952"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
