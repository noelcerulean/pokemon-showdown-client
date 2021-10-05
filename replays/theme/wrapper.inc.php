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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6686953715779838" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.18867630610073816" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2636356168065639" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.18229417391266356" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6278288128926195" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.35666892927355076" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.18532297971053735"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3578737003887389" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7451035726479489">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.39622443928239504">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5878626469924197">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.27079042338687986">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9461937104734246"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6302437885837444"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.31831312276103985"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9108725902730874"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8411733429046888"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2148473306914691"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5144627559433996"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7594820814535428"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.09258155079068575"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.19216929605395716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5527102556062962"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.1516708855630473"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8639915541340693"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.49030334058911573"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4550269641167404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.45602506272219556"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8040423156182661"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.948007380523403"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.1267072106908722"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
