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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.1398040873214491" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9779873597895439" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6113882386504063" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9052609807723536" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5099878281806544" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6175109125408919" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9201929527524975"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2492575991410636" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.29521460822046486">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7402002555928534">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7369157421782502">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.951556914606912">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.37340367616159353"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6689157519433582"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4028776379054012"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.034476371860326815"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6950921854008023"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.24778360421644774"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.18383343590678214"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.47940390317527193"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7711685378433546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6651815276571967"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.30811287544623367"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7244834144928985"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.08877562041430209"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.32512187816105165"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.826443861273459"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.21418305788767955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3356867659213346"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2186363138091506"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.28775515208962044"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
