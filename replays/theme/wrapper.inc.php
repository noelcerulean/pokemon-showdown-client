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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4597361793099246" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.886642930904987" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.30466888598458963" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4477999050406283" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.1024674351330499" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9718284086880444" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.0759839944097378"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.48286051310215483" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.44792057307092104">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.22433831558814132">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8911628350175169">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.41765614955317276">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7639768483841736"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.44036696560903565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.43835243728173"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9245766309271892"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8700503419331698"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7286387125543248"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.04112320333059549"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7060887835932146"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6336568726441802"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7385990227952717"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6169042004310499"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.10343292100009527"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9429450589002522"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.573573169203043"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.08086007414822682"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9236726062718217"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.07130109263793605"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6580448552283023"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.21606153877470513"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
