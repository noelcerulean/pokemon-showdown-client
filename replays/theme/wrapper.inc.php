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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.49183009201335426" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.0038398148520975006" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6874191551064255" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.20214886812259403" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7787077852474213" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.18960294316781634" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9644634729335937"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5154947366569334" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.333789125265727">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9925472925310557">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4599677168962737">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.1984644798088866">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7636902949597462"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7543338762258893"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8885400155166523"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6419371991627516"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7835616542542454"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.33394637412712447"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8259647258544125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5969312334779167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6848279111779092"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3828177850243626"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9799295922502276"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.43207776092478034"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4670840370573932"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8820801940136764"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.39545428170622743"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6265669039176927"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4850060611278504"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7230542177959605"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2076231167118643"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
