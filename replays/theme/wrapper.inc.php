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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.23287896231374638" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.25810927806488837" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.16289869706998972" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.45758868684871135" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.03029314956500051" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1399010798003626" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7992421279395199"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.47534603950702903" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0962563369239231">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.12737098408857483">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6644635881047443">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6088022074456554">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6982988729206507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.07246842774588869"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.43657109865616506"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.184142151115537"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4748120575341601"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6017876624251954"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9786599991103786"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.19702915240310004"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.883513589775935"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.682887732307109"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4347099232059628"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4705302388981003"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6467343208749399"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.48559828181998577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.03197465182048709"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.10789685690596684"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6611871397833213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.10127135142123023"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2774350604354907"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
