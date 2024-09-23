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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6255985765473229" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8857693584701793" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.882675008411991" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9489837818685121" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.969142665678808" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8931157506487795" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4737849710281141"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3784890161153527" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.14587619759089065">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9614933373391934">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.22379981456982478">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6407315039105146">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.062307902959536365"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8160937405741817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9099124930371829"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7109405464064884"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.414302612188566"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.27921719637588427"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.13840532959856877"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6789649472427237"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4858626066108449"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7308767338600743"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5990032396000806"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.02095891866971389"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.26381359973459895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8458649657520829"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.27771673915400563"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.20444031607728186"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.08524827967027826"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.710834691529644"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.16038912960451612"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
