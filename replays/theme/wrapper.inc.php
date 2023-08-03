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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8890008166670844" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.537322562056183" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5915460574757159" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.150059726336909" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.48289737599167326" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2315705300959776" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6196323477034049"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.04373689687424309" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6044488023891019">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.997699669980715">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9278566280193488">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5540654208563163">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8480806021339569"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.25063944835930974"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.06170387145852607"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7330487912023009"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.18476064278892967"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8605983595862923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.11946879957700496"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8371172046911113"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5286677254160934"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7982720868898463"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7392364694750879"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7644641040074387"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6816366691836062"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.21744350828158132"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.35662183287422833"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2596035220570274"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9655668652005611"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9895673133688767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9949262089946105"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
