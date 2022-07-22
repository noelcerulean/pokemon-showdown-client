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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5788945492873399" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.20760005582989605" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.900162372458809" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8676143946647696" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9516579862487831" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.13452864436169" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.19656573410232658"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6448746571346693" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8480306036588254">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.42762971737661726">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1766132830370113">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.08404151620241551">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9452008946346546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4732980268625795"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8740952420454309"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24535698822251018"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.36719223812403645"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5359257357152238"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5711646401424673"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.12858632017503546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.02743049983319379"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7757977104994975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.20184122873751909"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.38380403418331066"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.08168164128818955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3535938468648301"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9234222928234224"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.05965646805584246"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.20753298234252804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3259634268889555"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7558862752398954"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
