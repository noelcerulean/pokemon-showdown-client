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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.571051667375132" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8289442211000131" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7664127956200213" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9006612257064921" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.505801992429431" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6178356380110908" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.16939833203647447"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6012931077744628" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.31674347987729257">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5910754649241687">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2786025409963988">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3252093211090472">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3956296971689637"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.437914523347263"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.03141845639009144"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.36259283347134597"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3843758361176013"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.28040069038410964"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6993067966176727"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6869219965737381"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8721487240890606"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4708205499204563"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.23041052988069533"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6146911229731815"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.32185351372189497"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7686220463303199"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.45951126655992414"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7652619418486324"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3177562835964094"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.880214864340406"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.25226270435390274"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
