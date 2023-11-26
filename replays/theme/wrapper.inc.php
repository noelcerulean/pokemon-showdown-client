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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4555453831601608" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8276787147845659" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4141852620305697" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1008187086078367" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6356013796498032" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6040990510371471" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.24803555358022145"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.42589459236160976" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.672800301699036">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8248696411338228">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9848915949549975">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.009865782016197144">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8935545804429965"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5530137325028164"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6439286237382886"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8908909323430858"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9194720590808816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.548371495246075"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.28170289802991744"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8406829923785559"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.04752940824257457"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8237330960066813"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6241967980786063"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8620516739397104"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5838119788398155"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8976232614684185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.04488199751957023"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8270789669127547"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6839701495461425"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.043370898685196835"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4803659762180936"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
