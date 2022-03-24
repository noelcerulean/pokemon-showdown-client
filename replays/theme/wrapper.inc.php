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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.040710112176143065" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.456067653193186" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6946836484091039" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6876509735003986" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8125381254891555" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.04738610059363868" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4585741354502646"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.30721416691410286" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3715312950593699">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8816461488799912">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4120309165840006">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.21055015790543963">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.27398611360624603"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.10538201464624142"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8701552758501914"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5116620393310245"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6988648096281935"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.005745433933193045"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.33313475867963205"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5270200757554022"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.26553303764928216"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5481543882061326"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9991826044282002"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.43234445025097457"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.016894886836324785"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.30798722996664285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.17511432169538188"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3673159163523816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.06405453510883086"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.06131902424242974"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6952554798539761"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
