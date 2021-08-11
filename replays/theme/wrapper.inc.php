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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.15049145420383403" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.1372800190342991" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2747336942532246" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.12491792186226514" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.18988125454471882" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.11479141657127889" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5084932669169366"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8910534956125835" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7952323768493259">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2494598703137887">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.13796029570566026">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4438242228129574">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2057354927020949"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5357997175877578"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.951678550860984"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7056716448528837"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9583525295918618"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5483044151587793"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.593719474489216"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2586638152562628"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6140239578579882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.07122204324072423"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.686565414437956"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7773969746094307"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8766226212826491"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.37693873377832343"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6016837479890833"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7487494078642041"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4560600898288447"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.17549358658118508"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8789527086452722"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
