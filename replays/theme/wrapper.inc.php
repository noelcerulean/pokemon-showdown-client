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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5210520469149922" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8310710095471678" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6597444979844374" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.42960024712081846" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4981654559249775" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5490213180622538" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8982197153285352"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7330927638519156" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9112053770197965">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.644971247740233">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.025320087623768917">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7959157715791185">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9252623475183193"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9465430776115975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4454052953719858"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5098958028801892"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7791081927667194"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.22447079259633784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6157556044183774"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9942315045362076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9902896427746759"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.31013504247568346"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.47106263527765657"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.17219151365526986"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6925023672025512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.19795080274299526"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9301677262193073"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6536282877930195"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6756865855763394"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7752504115254577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7592920851598595"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
