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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.25368941105394804" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.1983077241599609" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.0007511908270492196" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8020533321654701" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.1878201949711693" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6140882225940516" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9339666674936711"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3730923150111578" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9960557587461387">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7885442267308957">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7991425971104753">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.1796038340254844">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6153511390617288"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6715773472406319"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6969788689292986"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9285874311874538"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.02078787727924336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8178605110052171"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7169882522465811"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5323549428060101"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5440166837075942"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5091835862642573"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7343668578578617"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5102102436277669"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.18515170645755075"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9776958635505437"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.0034227174700838248"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3377834171161356"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.18467884970506065"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7733226701523126"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.09564256051651654"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
