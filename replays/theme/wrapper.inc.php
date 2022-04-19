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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.36016872088092966" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.56859896494948" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2261831706217865" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7891294222438794" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4475190050209499" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4660238995455901" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.46286671778148425"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8004585271007754" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8814268536841232">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8656129766444587">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7752922746666153">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7572912994011771">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5533103393425356"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4350037738407122"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9458068687704331"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3182689901556406"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.18760616488874238"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.511807070334042"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6207620119260404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.1116584546291739"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2583168448739519"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1444185349611773"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9629977421694149"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6343819424967747"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6582645161068994"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1609277891989933"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7866195779810423"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.28580423131542076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.25250479617163823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.013566379885120217"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3794341250314248"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
