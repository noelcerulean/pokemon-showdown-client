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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8015517899305855" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.44656641935781183" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6556189175292484" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.20343612207307404" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8857753803033785" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.12639045275360838" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8624798200656332"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.673630513663902" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.22098032020292968">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2530561481419644">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.05320876360435922">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6990174053457001">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.05193730543811559"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.29456018880792567"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.25077605530071523"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4086333977877572"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.09309449767886924"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.400523197723879"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6418942013091233"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8967317525744716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8302626112984801"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.03291573815127191"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4174883021074738"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.821214400563826"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.08642014058640535"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6895180291623486"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5049697346366926"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7552813219880896"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9810199417326038"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.40081207309686673"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.1617078431197596"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
