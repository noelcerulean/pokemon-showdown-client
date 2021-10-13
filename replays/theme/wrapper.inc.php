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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5695507147361225" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6206292541532932" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4469920980073503" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5833237738613615" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.44926793325052894" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4947024103952333" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4339257938302983"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7247036286702722" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08003088968578309">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9650706476318376">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2492503955665415">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.13371204351021992">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4388748918103733"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7996619487355836"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8995171015451509"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4214381282566697"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3443186085216561"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.42729084130572215"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.28915697301550347"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.1414850965894905"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8776663013575567"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.20344900363803142"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.605762399574489"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.005751333429952155"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.28529093572304953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.49633028707396476"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1493431405325718"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.1192915773664418"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3966504769491641"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.20366088260224435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7536724290575438"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
