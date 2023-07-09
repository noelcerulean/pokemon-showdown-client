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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.13443561098539192" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.46102530323600766" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7310584705720773" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8747882930640738" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6063028573446327" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7854445641101968" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.04807047472102588"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.45998223899683244" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7737338243103584">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.23206872154432867">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8563387572117631">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.35679015285715954">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7451813512814836"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.30439360835295814"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7956661249485737"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4187085542003208"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.32025026598971396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9095024848914683"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7480031281369497"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.19476358893036116"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.504911310913922"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2144165665258817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.31806253212754854"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.15424552604255526"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5232926550790158"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9239451056598156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6623744670655503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5394065151928951"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.611068218904979"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5761600160172899"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.46675330047751484"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
