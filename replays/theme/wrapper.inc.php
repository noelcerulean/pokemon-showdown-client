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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.06846952085319802" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4187891136364901" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6675151364480347" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.08847485084276929" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8924667054031985" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.48118263945851925" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.17624684529567558"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2747967319618656" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5384750229402271">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9689222832881115">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3809795455707483">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4850438710549507">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5528578237357067"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.07984744283632361"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.19427998749039865"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.13369393719291955"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.13916447020495282"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9002588875279214"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8491784467854959"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.48465433857710694"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5801989072755622"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.0833619822567857"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3117211824799917"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3940536074721823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.08935800092234603"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6744081818735788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.42184243431922686"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.014326544917552475"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5375195601044407"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8460535195894594"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.02433101423720152"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
