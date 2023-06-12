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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4322546352485195" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.34381286649442155" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.35768096765379376" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9495521711673713" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2285444224336599" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8287283320457008" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4427557736606733"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.21875317278247475" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2602613027995395">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.15683559445839124">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8637935778383121">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5448576800922886">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7147306057793752"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8228609483417275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.48507882302786376"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2890450840198999"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.17534733992114004"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8663489487161231"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.06250725740865537"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.012537456577233153"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8124883010949338"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7915858060289656"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.17142953664126592"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9094396874259794"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9279668548781053"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.27178326286527255"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.16988033213733722"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9462573066467552"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.28667647397993434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8015236213954131"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6673805930371481"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
