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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5306947101914992" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.41849673534987186" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.22746417986195477" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.04889432974951213" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9601221994776934" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9326968302694036" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.011044395091475145"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.22073874835920804" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4864213796528971">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8967424191441926">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.004377555117303311">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.37071141340227065">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9599816399739252"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7548308866596993"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3230357646527935"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7377978784188284"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.753458521650755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5710232174830587"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.41555133120983134"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7413251723774088"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.530436195629929"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8253700627369145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5981604818388788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.16577784721851851"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.806751548237088"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1730100851223133"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7718024437082127"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.004671443684705512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7435920811159578"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.29156314851860055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.02017521198584804"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
