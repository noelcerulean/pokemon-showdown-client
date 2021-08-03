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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6872666933229437" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9062794259705209" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.05658987609393207" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.269938425815079" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.28871750950795017" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.29599312283603485" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6328858882982245"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8334341331383219" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5600693189766681">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7986200555627903">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5797439624890812">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3402311871778685">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14512525793897035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9736767464734286"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.38050338488535584"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09140128609594078"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.36864497154788856"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3935795044382331"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.41547099536268184"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7512311706328076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9816791197588846"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8608327988775475"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.284740619339644"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4144200080416782"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7153228027397873"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7280751948333424"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7516388656061317"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.027789054942947145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.14773236338785334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3490895608285358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7198795996484855"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
