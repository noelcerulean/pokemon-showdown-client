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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.24953187166050905" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6929839806017888" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8576368489455475" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.21459142678611953" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.43917877835170005" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.22792464347745156" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4013403861487925"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8615674378397371" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07462723980103991">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7312584466541057">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3792732698809407">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.36025888010463425">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3870060882530497"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.15400816140426365"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.33676470177639284"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5589915505862231"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.16082464904961946"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8185573181789882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3829267745026381"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.34220038543877096"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.19747591347707893"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.603234410042395"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9021464949821565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6082057837300201"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.05828195236224465"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.44569538871577863"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6019550445107633"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7074922756854434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.04392267960267704"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.07523282495566774"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8102568197355176"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
