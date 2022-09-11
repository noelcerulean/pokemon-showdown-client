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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.1304012531149974" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.17104572400128548" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8329834787113843" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3529827169453248" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.43565498333946495" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5461909463796744" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3805058622903752"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.015395392335398661" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7253731317652674">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7917687226799439">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9316272276854665">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7966746013781456">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.13001942856706772"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6050994919452277"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7634076442369342"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6619945694423492"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7031191410087523"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7315538682759415"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2339141607977302"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6547628823757008"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.10417205413259856"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9516497024642465"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5089957022458682"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5157791328838031"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.19814756000116285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.378725390080344"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5876282174777816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.05996322341375104"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5033350111583474"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5634870677092187"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9290362583987644"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
