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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9398616119169725" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.33999135523542034" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.08669503854366378" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.18132310329219514" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9405297975099958" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.22276829540083942" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.012080883065260117"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.02061191170312182" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.09572054390502394">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.24504996998508144">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1760621122826327">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4708624385012381">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.027720847400848125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.25239255980379305"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6223480519082238"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7203604465596154"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4552169235879717"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7474517169030923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.25908691133740946"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.045923347953508165"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9283120204779285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9325927537182659"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5022582428214541"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6808694304797571"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.823537586281917"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.38943327925510274"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6139022318135914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.47748750664632666"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2628116180781144"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.910223104291598"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3157258008446604"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
