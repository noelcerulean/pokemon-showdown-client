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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.08155699105720804" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8569294184436478" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3611976596444497" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6764332251663276" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8141735946703625" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.746442050822175" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6938040102366607"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9580969790952212" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9854910041066589">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.24158945159477918">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6949105786409662">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6174373711351151">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.29064087829226404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8359876882535726"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8702345204724529"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6300702884486178"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.43244469968968313"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7204769214325812"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8498985838796329"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.054596593650578784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5489050564021785"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.667360326114026"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9560010223090263"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.35737836598368444"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5569558298841606"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5688766559033103"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3343811382933515"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5698701543015454"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5879105715870203"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.39846663241706426"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.33259804809855664"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
