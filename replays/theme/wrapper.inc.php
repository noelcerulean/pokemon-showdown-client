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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6082295450997204" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6875662977667014" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7405040963222893" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5647636191018444" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8593388753802411" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6915258143236018" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.39850438246164765"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6155227769945304" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.88499284959128">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.34489073201074905">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.042289935095996656">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8722958033171115">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.20346461308406028"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4306853437330349"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2864438383902257"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.07897236344181247"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6956100386755335"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.16737062343675002"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3028545180789095"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6509257266228625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.686110290000834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.526304907973232"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8602698990829851"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6373169392578606"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.17611352448954487"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8582060735240511"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6312307525632814"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.03983800862964304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4454116642822197"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3926577701671008"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.03502418028816767"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
