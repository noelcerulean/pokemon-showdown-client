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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5294604025557847" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.050069668822727786" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3706149858102219" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6200555323341532" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8291714285144143" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.26211023791788723" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.09909159597628014"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.17410414984171574" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4163701978307133">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9885844863435282">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.018854686682978627">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5709536578107075">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08541125205446787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6472942988672259"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2551393440080625"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.11443817321281946"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.46612479318130995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7907294782147569"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2399248482345422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2915379692072455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.698054882454116"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9362751356061734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.029607099729173747"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5281799356695724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7947907800947898"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9663982070712589"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.36320941192732237"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8300483822255029"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5644034263563957"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7896393007383575"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.15062016101425102"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
