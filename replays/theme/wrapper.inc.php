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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.06039857234318213" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.639034348816363" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7420469602058888" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.19052829530746007" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5305694392365934" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.20736986492462162" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3181410896154355"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.22041277403202986" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08202224871289587">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9258684821364904">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7720545811462056">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.46795634898263305">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.38336584730626755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.255572835220941"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8226675921236886"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.11996824166473341"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.09697482967632176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1861096815001404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.20945263044471774"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7176559779365028"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.25837525725795185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6778338365735599"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.126163460281854"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.21092161173152624"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8502229210479699"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9152174024439359"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.35756390188693765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.10091121871658593"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9195000721236253"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6902038166304143"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4190064894815353"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
