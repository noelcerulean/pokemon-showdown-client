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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8033378412647882" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.644809619862529" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6483808519730005" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5664486372492137" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7696273261551525" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1446188022402599" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.05059765881822509"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6698834311885431" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6739869169045329">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.37943642159676494">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.28249329606804774">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.07307818335278493">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.003305834828443599"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9659256810173831"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.06974016421787077"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7194019997083667"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4919887576296136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5774611635358673"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8041652608575762"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7545729424494345"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5830094337987504"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1847882844263673"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.10465760564848048"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.1856128098458445"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7261608301982019"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8875756810186661"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.210726432123028"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.06465754205246421"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9659846807873598"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8268567567778404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2803823217420194"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
