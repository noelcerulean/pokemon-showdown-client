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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.09467705699785256" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8095121935193428" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5309036154828175" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.26502001800146546" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5428355106963645" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.32939047994583603" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8682940010571718"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.050291720206168344" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16499614373999583">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.632072392468505">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7365293761234089">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8627749390954051">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4546395634253304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6933187366240776"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9171209558081079"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5199156844395971"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.42018354137019376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5761502375661682"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9549570142260018"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.05038123386384208"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8015649568678278"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.06652460285333284"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.13313603314191025"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5867089802057177"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.31351016666637066"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.11111472268177702"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5802540596261125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.685846943136156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.34512190672439114"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9214577806097939"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.026943410442715088"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
