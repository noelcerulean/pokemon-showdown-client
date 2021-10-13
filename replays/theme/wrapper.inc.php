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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3175227435189991" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.33610415718978826" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.16650202025656036" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.820818743996137" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7380554994152098" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.37741792868172674" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.1401225326994595"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9108783800294666" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10185048770466865">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7217383738574055">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8708212954214967">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9226803230577072">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.18769395483523055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.48561175186672934"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7886084940976337"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.024630988011947963"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8606945369285028"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.035697677746354683"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9863589005388989"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.12976405983717632"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.17089545262127182"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9342408057665974"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.36977918177593505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7951220842350668"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.05348772955371084"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.08643851434493022"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9386052991502007"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6355364643282964"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8438752344572371"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7773064059565622"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8252483372176493"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
