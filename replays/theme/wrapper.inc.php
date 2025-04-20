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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4071524088193912" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9681250064960527" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2499465495640807" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2952474969174972" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.554046627943404" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9193936796467146" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8093101576202848"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9202180876762511" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4402232561550363">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.412462705146903">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6134422440952589">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.23647722978072538">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8925246326241936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4877165128403509"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.07535547573332191"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4479448931455299"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.08644359921141498"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.0832832389852487"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6550824217272078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.31787406071293267"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6165280840504659"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4751469740142795"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2448252266537747"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8462249784169444"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3555431054160376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9841672742419365"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3378314927885109"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9814247296609251"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.44481204292580667"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.09342916172165339"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.17529610303936516"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
