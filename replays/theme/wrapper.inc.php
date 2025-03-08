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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.428477996437711" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5806545840091526" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4298474300294046" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9161497429723449" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.22699782188001927" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5091407684433997" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9925592273130754"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9707800768272052" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3094390973750647">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.35723268089656934">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.06037546470214239">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.44089950846999404">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6594663669692984"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.06404886041478863"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5254351190342141"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6107331564383192"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5588312846747672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7512943535153416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4385456140733155"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.543983725515387"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.17279336938065626"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.13033289003129322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.1047234645493389"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9539135469274771"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5030423916097118"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.32840968710363927"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.842796327117191"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8908845669401111"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.34278814683862757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.18841237012093592"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5695526554286361"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
