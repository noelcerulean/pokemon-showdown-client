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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.34271894253202095" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7878978377690846" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.20393403350780592" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.14499674392634243" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9680499913985421" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5050540359367197" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.13204042209777822"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.14456981677455816" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.012850884125908735">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.251902627853432">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.47751429352640584">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.14401556486877864">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.004460021744659537"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.32305448841701834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.991518697825049"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9566288420509077"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2790334589648453"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8144026268127307"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8145703410662677"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9270625029037791"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4804511401646254"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.595209963595682"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.814470195269859"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.1553867380607199"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.11315928946357268"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.29336767650480366"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7120764114236882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.49897366898270423"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6005561725623245"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2072649984867434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6466646237438116"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
