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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.40555443277606584" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.033735253331518944" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.20296899812323188" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8507563930983186" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.10046409979733317" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.16927312833686714" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.692748369522777"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4577010791565934" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6021768293943541">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.15380093844702936">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7980416348347565">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8513905046998265">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8484856842817403"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7414834187715855"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9257127680397279"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24226348809050147"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2162454005534431"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.20273127906165023"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.033367758717090634"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.26940900069002627"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5755027379658872"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4494814447580635"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6167339671649485"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5419247617402485"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.24051584806087978"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.12705297380891634"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6296389979051078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3405020044263909"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2985700045033519"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.22942580375750166"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5540007329663412"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
