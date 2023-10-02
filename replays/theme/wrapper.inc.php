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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9417748165696358" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5052811983873915" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3738079294342076" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.012747987015069961" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.626571176843373" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6557097458158831" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8006855003838322"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.019408516503751194" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4801627038502272">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.007039487277185064">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.02059596701904054">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8418242721988483">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2659623133122233"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7752709788905034"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2427726668687169"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.934724818486173"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2524550640027099"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.004599414198307894"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4995365433497394"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9657043861017576"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.40076624520792503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2867038067303844"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7925784462632512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.06850797778131335"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.40561565604336725"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.23675290251456693"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.37253320406989787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4800279257591267"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.37311798065263724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4404749077026564"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8276376708641215"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
