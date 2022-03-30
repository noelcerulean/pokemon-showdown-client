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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.11536144982932206" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4041523122096966" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.11220626825414803" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.438389664496708" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6847687679382162" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5515754605934022" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7484023114345106"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.008898996232193923" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7022336787007906">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.010592544081731159">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.03448041976715421">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8407554465197691">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7179434784398058"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9784659866928964"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8282622814863472"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4241464449451906"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.16527683419538697"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.22826820458546293"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.30243806415229435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.329103605478434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.621435466329554"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3052943374239574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.15593218377560003"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6134449191274873"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7449691315842084"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.664005820757076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5422180432447281"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8852390952771576"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6039603887126879"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5270559782788788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.39383762731906513"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
