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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4681713086600836" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2712194031854551" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7043282422136194" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4017499200873835" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8008955864076575" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.08876320598768705" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9562906247761784"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4220860667919426" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6510837368832885">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.004143332915799158">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.08482929416261231">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5668736126508351">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.10924883157354603"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.18250294230867348"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7496928622222028"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6197199895812897"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6363484280474021"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.01974573419343084"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9722915138154222"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9160693992852071"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.26422599787434264"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8831998460207202"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2871302255593875"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.990073721355786"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.1300270062584734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.17930137452427486"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8840894619869124"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8031580458314085"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9983225838994774"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6313892098468565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8982528130352616"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
