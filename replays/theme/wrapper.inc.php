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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7885589145693335" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.23435344478412312" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8982533327434674" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3596805939906764" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7943444786317084" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.028647489895016864" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3757234421215585"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.33866038256446784" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6780334241022481">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6840762292231961">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.42653422790566364">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6415675161759089">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5772067731289356"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.35572951144260023"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4343332834011402"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.19094646198327014"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8655304323235784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.14507720261650592"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6010396934241271"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6123881490118299"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.04880702933286485"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2572018883298999"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.12163428335440907"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8640852587996724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.045164798197838474"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7946529527349777"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.11776898744563136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6070171958661754"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.855922623709582"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6451368207914063"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5838297509179964"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
