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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8711346115464318" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8370469761507864" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3683587717948622" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7692128778127325" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4599430482366993" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8716030635201346" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.08584043355634918"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9296214762781183" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12719033311799932">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3918848825393304">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8208603369982919">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8580629145056922">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1434869976700479"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.0038949250859798834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8293242380210897"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6217810267639186"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9558794199678828"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7559113102522252"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4106303882598199"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8903252237659782"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9010245112486337"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.17307915214627556"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.283757866482794"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.2951146584930584"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.12050844633151936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7156233649697799"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2564570793434551"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8233493735665505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.588734510280418"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8176612356370856"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5850956226595461"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
