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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5482310928718928" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8203113746548678" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.0964320027430291" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.000772212346125345" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.572072689854453" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9976366074489913" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.995152542287772"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.15287341481231465" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5680715183510259">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.665718926180957">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.28190665839561213">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4017880580438692">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4185486165052482"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.08308995921278017"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9663606327962143"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.13533124351564785"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.42586049100489043"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9991516696325131"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9244958750912083"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.10970569376877415"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9678201710285542"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5246751818482743"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8488280367437214"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5312886047749971"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.22149913477607197"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.0031058418053240278"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6439303889185531"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.19443650070355512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4152226444898973"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9046923797929369"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.15764339527046267"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
