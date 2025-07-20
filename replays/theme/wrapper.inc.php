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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.39044654979338955" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4924834381233516" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9823001504976234" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2074517833255891" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.32802136130857673" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6387227500706323" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4646167189549122"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8357400896514955" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.19709617712711913">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5378786838662974">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.17426342859531774">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.14300614674484113">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8835354941837745"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.03388712467833099"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8085506132318532"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1553000069982391"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.09052848725737928"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5689492976740882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9477042500339734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9586321815491852"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.76497349335315"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.018870377172885755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.28292114260713275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.47980072648564476"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7072772419373565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7786212007485511"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9764009172630999"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.1370576758362767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6150502299730991"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9714387985108115"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.1983217406211426"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
