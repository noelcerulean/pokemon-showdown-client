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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4124678334417866" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4964412519487811" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9637759776009418" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.24606427146243237" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.43448169878366927" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8164090517751095" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.20897645283044453"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.16571984350545477" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.620593608263903">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7007604873923932">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7431926224307606">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6087572085440394">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6795604864053355"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.04660716550693755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3520927411649637"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.022355715027514433"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.11980453188886098"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5573155385185269"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5289260257855206"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.42139284413845957"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9995485634531787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.09758180984017706"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3308692815096479"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.035305889907581545"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9634397826626211"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9055378551040008"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3646153566183974"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5446721547810227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7504754169632399"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9098845290111406"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.14583302179446767"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
