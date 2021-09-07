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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6275337077459615" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.07464819119966681" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7476177275413078" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9417832332676879" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4790150173281076" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3068690026243288" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9888194543547288"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.36058150971617065" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.49451766906111994">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7795933360554901">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9187384034629842">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.434103520354963">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7711017436626455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6042497386075456"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.20659523234226618"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5325174508620296"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8371770879623326"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10273972354324545"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7206606214773126"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.40466103221044736"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5840918172281"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4579630527546159"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8203057280150412"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6462960251108514"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3983064971316008"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.514106900940767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.26206882553636723"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2332364298626033"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1711368949255263"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3543221106775998"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.27702906334913946"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
