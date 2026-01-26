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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3388778890376263" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6159341051010669" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5355778049973672" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2712326430954721" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.14219914752800267" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8458383947150063" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6659700081555135"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7153764692321758" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3928312630440822">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7893079638633973">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7351576176945227">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8659721219796557">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3331514842762566"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6558757047715675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.551858007866"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8584012917159654"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.29261983765120414"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6732226896294202"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8431875935823947"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4921133548349408"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.17870527860933128"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.298466218717103"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2888289876999266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9990547869146358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.03816005585804283"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5803240996732717"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.025967193740612515"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8991001193043218"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8460216783463879"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.08459784607049148"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2837529804541794"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
