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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.27063952887623355" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5937324982220371" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.48558267158153723" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3868584077439281" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.26527492547577425" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.48339108907337525" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.24450815040927543"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.47282066763266317" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6038774089052346">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7516564298158273">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8250256226455663">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.07539665702885245">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7106969903862801"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.24641652109945267"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7341484059952048"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9021019200234106"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.363154412230174"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8541900369672892"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9993566840677712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.1485489623132188"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3702768716475695"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3635777411371577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.39208142809805535"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8635846247778001"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4907740079498957"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.26171814012759675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.002719789711658871"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.49776235089064524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.16412667457813757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.05632059043684623"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6836685591475147"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
