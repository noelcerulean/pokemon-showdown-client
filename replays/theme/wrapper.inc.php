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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9381437698414647" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2725685481439091" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.1233220894344984" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2505627993701518" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9281439418774922" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9108703455725562" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8282680291400066"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3567417145038778" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3126952496072548">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9528861011785155">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6224545522816523">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4854890186694394">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7789859941621948"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.2806936488367895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1259411128953951"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.16959384668115152"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6502068849019702"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8665255684421549"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.05377500801731783"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5553909979041618"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.18489368853506138"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.38477418012181497"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.22861760450762425"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5670625908188565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.025451860001310056"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.49210702364134407"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.15106312829190616"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.020161672727840863"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6837851463530515"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6194986350364569"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7896202782856705"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
