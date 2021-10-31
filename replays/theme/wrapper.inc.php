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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4453654978134505" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7716417945353662" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6081747022547397" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.587661121178584" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3588753147612751" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6322134046193861" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.21456978326303577"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.29549680490766694" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7620746783737495">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.16930969240885863">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7977093627967544">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.04087030007080239">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5177342010621131"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5158391049809272"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5211113122709319"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5855735039833734"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7612559583177179"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.89133008716374"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9098925358288881"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.016976360508271338"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7157760092728251"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.42272005943721425"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5558073917699191"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8774887336720527"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.38148952241139944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1903069846992187"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.15510123533413678"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8018319431131693"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3462478752838609"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4109059557486303"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5791142759014676"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
