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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.05448007256826548" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.04942167684310106" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9472488105136889" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6123384694115708" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.17657628820051374" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.43727777806471857" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.22120362259301407"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.964090899388123" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.13189708425854985">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.04139934367394926">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4736673022261144">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3130679298163177">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.887123917458466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4192985111890959"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8292067479542924"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7472637893464529"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.25350322385185997"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8314023220437985"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9538860768133539"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8506323067198391"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.031217833077076707"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6083141889047865"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8380095114700501"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.23733335080844364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.03684388248216375"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.23673606347779153"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9814105996802505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5663729120764656"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7658335789128021"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5620620078754686"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.10025493161182619"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
