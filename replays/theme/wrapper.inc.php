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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.14327409277302294" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3055754077263322" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8208765651569281" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.29888460813750184" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.13199314448370747" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6264439584181922" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8063940182245986"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4562169439084449" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.620836036414784">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.33631023589559694">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6358926790977188">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5975516346096525">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9915988184103435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9850663659402896"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9338178555381917"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2534993084968695"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4806837834871316"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9872038100479401"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.043211764060933744"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5784795748218807"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.17982050080929257"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9524655685729484"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.24943874870796545"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5046472909144324"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3591160648593341"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6207603533800681"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.0056360682722129685"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9307278924954556"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.047698484269766306"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7994609097237362"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7979370415441023"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
