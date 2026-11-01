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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.04173837020110904" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8711975510819655" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.09734568617272732" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.47618731765102784" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9970466635178301" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7949408652937644" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.18256248254918706"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.07012175992413328" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1416834718735649">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.17865933107285936">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.09903491318185909">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8713412191553522">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9593013766548815"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.35777562161781995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5397260357435971"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.10054836049985572"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6342768900963481"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6986454768198358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.1653529679479988"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7500366384862687"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9115810408473084"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.76232158135204"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6477738095826862"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7874471765918597"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6449986441806868"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5396679521929387"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.41134611072790095"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8857017764084739"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.747913385056827"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.883940547478871"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.084750090050286"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
