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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7199285654185015" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.19193466727325004" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4684873812385679" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8622906927255294" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.42722997351569947" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9599962551800221" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7529973203063758"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4345076504355363" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9599129381877511">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9935789577944241">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5229435629304267">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.1301894610818728">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2694499345693666"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.20459822649363746"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8600356190897036"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09834253108290647"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7411403026136354"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.463493802672835"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.007694338864875139"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6410807162794769"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6705523795910504"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.23060681891641455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.301523550211098"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.13037149205334542"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8664931885485481"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6938532949759038"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.29714705068138625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8443918403279749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.486246336370058"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.003938155865333748"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.33555759891089876"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
