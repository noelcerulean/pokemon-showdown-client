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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.23662059531236923" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.40830704262096384" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.44389607278370125" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.21415033189874966" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.27916681767780194" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.12614242077519744" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4751725339328845"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.544883230037938" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2885579741687936">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8150885189140645">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5382471162549222">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8991225656645689">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8168841297612339"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.1579666283272414"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9313963758765156"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.018166990356879076"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5930998907942368"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5453851339078057"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3507471408259325"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5472158632527682"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.15293585647737806"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.09497782000239618"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2533414958385958"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8477923281066978"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.34915325077645765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4473051963871574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4119538378824291"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7127722117864568"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9656672665012432"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9758979941718087"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5709254279675472"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
