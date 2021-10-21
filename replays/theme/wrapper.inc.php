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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.17931076745024033" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7255298914511696" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3203752964605773" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8712158448474525" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7957419486372561" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6129874625786129" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.25954950841148317"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7560893441879297" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07951314358158568">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21978818511985398">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.011122606123597167">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9431737418911961">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.20867678837491366"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6841034196423179"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7678426945852472"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5614302028150624"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.031155622013559592"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.24939295258127525"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6692356557814263"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.28982828498071167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6046788076298724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.15804350029058067"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.02919539332051513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.49415091497288954"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.1212891819687334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.08513336827876294"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8119682991430237"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5050436683751294"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2480603983120253"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9324112313201425"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.187988147688821"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
