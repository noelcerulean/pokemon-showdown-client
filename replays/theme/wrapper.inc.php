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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.09557946565562259" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.06534589132648772" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.04338288485865194" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8388497592521873" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.22310470264519244" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9048577584454562" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7187694789473116"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.375214487160785" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.281965442063264">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.44304756507956644">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.07210495098859915">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9836322780784765">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.035954103132256776"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.30037435801607826"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7291473147785987"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5055947858543517"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8215109005274783"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5348399708951572"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.08234933749413309"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8930364220320479"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.35091682168245875"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5577786208622046"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9520043305417318"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5329235741256273"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7721123390114788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5500589316143714"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.685670602574999"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.25447313603493904"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.045879947522760034"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5338328788976678"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9743929479265963"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
