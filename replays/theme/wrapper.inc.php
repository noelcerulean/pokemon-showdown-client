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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5034472216953796" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2797743668444592" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4455006967520414" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5725342812995537" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8696874669956869" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1464176668265209" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8589180857998502"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5732977894848914" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6008759517909505">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.791367501732902">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.33309233468331256">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.08043891716340124">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3258555022644871"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.10256151749804854"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6799434308102104"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.29807698359788404"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.822869681276468"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3736858075731342"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6538894374011983"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9545879422568042"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2617729977810923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2572804645189166"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8615528188240023"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.2433386608475383"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5212709194597334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4678458929948992"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4733274633130762"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.609530159689589"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3244413985798069"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.14374755871625688"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.42551828696158633"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
