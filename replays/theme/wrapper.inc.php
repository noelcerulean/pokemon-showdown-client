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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5488706986847305" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9680022775353714" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5561317154546079" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6703363442999255" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4674106028062832" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6354036920723727" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4961784677653869"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5399815251876829" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.376882384186618">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4438752661933274">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9150174837051217">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7167564839515805">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08627322844018925"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.08759268700568912"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.14142348072742217"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.29434019001533995"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5098458444276925"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8738862380483268"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.437295818121038"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.11294933254245021"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.13629881385146847"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8369322904898917"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.46336907252118964"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.07608374377744376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9725319878535548"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.05760275069515619"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8373360783207713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9381227683263205"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1738572171643895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.37552973467223705"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.19062071872757147"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
