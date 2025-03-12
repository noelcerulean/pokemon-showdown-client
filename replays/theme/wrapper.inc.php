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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.001680172050913864" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6999043234482165" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.17651183829964734" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7329021867412455" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.21566481959075112" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3690373687200643" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7866996080445365"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.680630352874908" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.22994916025560053">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5576830032007543">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.625169167329535">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5957438602599312">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5590577980470377"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5609482042610014"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3654889301770545"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.34557289373695377"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.19303991857449265"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2072368096872541"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.1376284544202564"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.34122422403849395"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2524876840231265"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.09445346139433108"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9747699056892674"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.42840630376467925"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5037278033897257"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.03960763266428868"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5826248079271514"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.42321431046518176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7695956511695883"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.1869867474560183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.83863141965887"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
