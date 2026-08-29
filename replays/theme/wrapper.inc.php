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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7670566667637548" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7852753756168436" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4321007001058037" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.48024092493990755" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8867586811204597" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9248922417000107" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.30931821507758417"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.48295949040343245" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.232915289314501">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.39325036326638885">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.07371584224800154">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5609986753818539">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.18256088532246317"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9446865697236622"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6340327845630518"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9777626590067492"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.20162468199282024"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.35525233444558246"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4248508241422495"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.14886225022401356"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9820600383404507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.22750757974812097"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.0971352874914666"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6923388931267749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.629413966442075"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7835436875648201"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5564869529385881"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5307907764844846"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.974417560223424"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.28074684427283625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2037840534594988"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
