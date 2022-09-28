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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2824373347066964" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.26842276446646784" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.55894893590775" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5263766410660569" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.20392933389560963" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.12621016182537437" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9657453164707495"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6972018950907828" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1501080259579286">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.62102807076974">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5253068501698888">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4666162058512442">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.47783822350408767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.38267200292011405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3296119346126616"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8109052153319667"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9045060260613151"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.43384233444988984"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7190414893241286"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.22362481720530947"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2734513018163274"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4848067775090914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.14920712829694072"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.40520456320778453"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9592446927420322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2642380974996399"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9052828931977599"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7934488577204903"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.05540706354229297"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5366887209608151"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9342209586795855"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
