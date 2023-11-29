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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.890094123216407" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8731275555237765" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7204549928280799" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3620184936007236" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8919860127421304" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.03303917520873734" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9194470677992361"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3081903075514951" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.40067419553754746">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.19323850844940282">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9487196976367684">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.19657956899794327">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4609402076094933"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.924962360690784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.0484044061414457"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.605896888159015"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.03242404721924763"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.03674597769095067"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9300334375338171"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2233136735556145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9498040844255919"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.021594978654457808"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8756029710759539"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7257404757745709"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.49094261427650565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.34525830858718987"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6172414700543594"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.39544756867188435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.44859713777392063"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.16533699525601087"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.0884766942517794"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
