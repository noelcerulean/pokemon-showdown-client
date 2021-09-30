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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.18167461177277278" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7541352790323583" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6704784949128366" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1936113067127907" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.1399167449656058" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.22657730069822946" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6329008023397527"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.17411478822706083" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11066562811142311">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.41772810845303776">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8806348554023624">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9916670873586961">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4899403312012496"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9620490628181422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.05124301008325838"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8651446281818949"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.49610873283528245"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.007798271031144832"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6445354055605379"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7233058353114401"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.1737958417929506"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1067671245003643"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9091931432050111"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4948485555285791"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.12611040014242914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.46634604480092423"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4231953897907683"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.07090187495181288"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3882650272376038"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.08631615683246951"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2191187503732892"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
