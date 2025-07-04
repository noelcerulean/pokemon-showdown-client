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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9450697518561286" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7721260918574984" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9395525180089019" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3179172744559211" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.48918996605488085" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9548295551051704" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.21075233661328152"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8237757773584928" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5197391966884632">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2654121015757418">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2312645901909638">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6540591566417504">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8443456014557196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5000210997354579"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.522870047942966"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.31698040151613416"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.20313511835352016"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7391922288198334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7816312616407846"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3059637823331647"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6431720419458848"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7476710479575372"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4717450603019975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8442573694086775"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.45935998367671305"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.07736191081578281"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8572064326812274"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.45841762325769553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4780524765570293"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.1569892349853823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.27090467095693005"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
