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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.15759058111148794" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5537866641288045" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.36349868430488885" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.24891161147759622" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.19411305479253715" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5537788289616077" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.05176278259951661"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8756562921614863" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.611064248262805">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.394029986394671">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.37717170652420595">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.310144578668468">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1391168890819212"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.0326803199223078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.20828951828836062"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.14572061237804435"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9388220162530827"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7222856795352584"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.008922492607893906"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7815365133530177"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8816377128989588"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.025274895061969005"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6434750871009343"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4584641268576506"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.03110967114033092"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7671013729628997"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.07513258637765285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.731875469921716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.048239665220365824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7473943272202064"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.24047476729137363"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
