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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.343502678942875" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.16065827856367787" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.17811159200149818" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6278063822823519" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8459721010853369" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1795378130923908" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8849248997532482"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9085953421410073" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.43983715518501487">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7647270391570662">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3958984417946314">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7446358316748876">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3531880982100779"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3615588807834924"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.04825079941610255"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3892777205667912"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.38855243312267995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6627418591941374"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6957011785275637"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5667966057837024"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5635041833178542"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7701261958548531"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.024746456741587375"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.04045483896410218"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.694189160000976"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9186511415786893"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7586194987781567"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.021994850003888455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8158282150105445"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.49911769234527736"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8460634311413173"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
