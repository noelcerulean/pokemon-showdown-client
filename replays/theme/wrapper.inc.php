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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.09390187890417456" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.831189201651789" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5461744401024191" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7931171153092065" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4141236743299548" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9741868192389043" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8351210684822652"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.30040554715610734" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.27875052319975735">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7351128717619975">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8881551139969976">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.34075713545742836">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.31907473774349016"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.40557937382472353"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6026579943668184"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.864037648138344"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6276433355437898"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3141975616815045"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.0956767689136071"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8306213154914468"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2385995321844896"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.38741249339774053"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6487418376681404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.05401978311938471"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4571546161597284"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.07676439521810985"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4465776779617845"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6879700207696524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5506880649875405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8233863032333395"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6000926232355956"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
