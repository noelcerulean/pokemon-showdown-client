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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6313565540854145" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8548619495451515" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.33466436659366394" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9400934576353464" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6181500233835806" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.015914251336889063" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.20941349104705087"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5274231091821104" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6620019804131758">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.01789261908798845">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.24517864880951157">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2204612503421708">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.43693738124968196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.700693952289845"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.764963999127398"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1691515874003866"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.06648158729820763"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4774968924253562"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.008797098637615797"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7875618570835814"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6388422736607617"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2983392655320276"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6511180743019049"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5420179815002888"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7341187705774204"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.007759951437174006"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.708962090046813"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7905610198511888"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.23821011367516465"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6835403854012834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8146137309033292"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
