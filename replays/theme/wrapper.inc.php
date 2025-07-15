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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6582319931192921" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3892587716600071" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2991375362975124" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6521509335170486" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7712906818271772" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.11338037183733896" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.17657148338654904"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4535311778003115" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3285325827088026">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8513290853889788">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.24306639462129653">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7434256494025091">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.014847578317022547"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.0194819836773521"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2973620049563228"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3450586873638004"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.984940756314638"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7686406824307652"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5912874563331345"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9062661806130521"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.38407577436992923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8593211554397786"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7267894761754297"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.442312129209244"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8823414048328853"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4912886531658527"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4880925271860992"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4378145267877078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9607778755356742"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.1371656241756125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8647669607488937"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
