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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.40833195868370264" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.0500212189190945" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5160405488518927" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.02687413161850105" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8036834370658512" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6085915940707787" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5472123447774107"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.633829201382651" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8895491128456587">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7771086129567608">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9795008746612675">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8482845896382212">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6332317003740733"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6851078068454002"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.17371238814698464"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7525439577833233"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.13790247569561842"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.983780633749737"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.40589937544057353"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7365849170029366"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5810609235083191"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.23549021226380495"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2841700167454577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6353027626560259"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6919533439209002"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9643539066292222"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7960440573326055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.59108408274046"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.24928490970670847"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.23037500049739612"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.0710060703669293"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
