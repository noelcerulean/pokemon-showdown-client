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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9345079953831832" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8250159877912089" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7047305742288628" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8996064071865175" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.18598621977663576" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1267322197703662" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.42655162646988787"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6936569199035625" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7249035114403706">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6962257298799017">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5790786294217403">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.47776989466107844">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.829026487790975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9373221702412255"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5806364637897334"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.674141507487519"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.28757660914308847"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.47649998820545303"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.09140767483608925"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6424209824328788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.872108390703791"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2821798562272342"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.44348846700211797"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.27157574714764765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5456801353650629"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6179497614609637"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9754068759285479"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9935264111595337"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4732164734874249"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8250649367769167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8446133668385551"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
