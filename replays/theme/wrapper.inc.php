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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7542779141029741" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4469019530341465" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.40581117038361403" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2309603908418416" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3650928743692361" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.14143052808228074" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.03539209826926126"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9492719016140203" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4563931891941413">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.048267906324996446">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6930486904002027">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.28344225406021795">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.11698924195563132"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.05015448930939326"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7665955820602779"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4538024350867298"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.35168193750079313"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5054504495612018"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.904537825345467"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2722966835716971"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.19942075815852478"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1305730751865226"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4545001267580806"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.07778755150305305"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.07428603839008074"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8179368756423577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7488288273224888"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5642945760098277"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.43028763024249095"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7943145283689015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.06589981430803271"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
