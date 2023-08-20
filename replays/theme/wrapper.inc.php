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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6618815333913834" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6366354580378022" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7293129792667472" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7950043472440054" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.32840098679850005" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7065940105610933" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2502389703851622"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2676937209527641" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.027081967518600703">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9713991558036748">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.41428405991927697">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7401664479855106">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.237160315627841"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6450687818842138"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.19101830266922204"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4059162075572833"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.0022696664529568977"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7352503367143246"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7199339889341829"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.13687445572386903"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9312102148035919"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4837333814874345"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4921167978558185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3239354289903751"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6538065114472853"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7567383293268444"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7983572085055883"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6480507441994567"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4980440246733959"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.17546581777112458"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8832307688712957"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
