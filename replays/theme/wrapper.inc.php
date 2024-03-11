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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5613242678053607" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.08513341118864859" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5923858945596476" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9000065792556766" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.21120098597238623" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9180715360876377" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.46220620501244336"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.42914020295204436" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4118396578730563">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.512398186894574">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.37720722463933476">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.20776007630697135">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8129611637586391"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6731133802688916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3877558852779519"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8811712481670453"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.407632579352728"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8988411947300083"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.005896277614305001"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5469548011266656"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.34964654781919435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5556329915903653"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3853000053731501"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.38238865764785546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6196825047459167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5033892987300657"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.03654874449205847"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.25067899081005507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3254225376185582"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.33604935062935604"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.38788418752269216"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
