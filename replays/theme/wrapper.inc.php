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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.1499226394237705" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.560404524023153" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7379322154420984" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5090673797779961" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.03638341646625309" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3068806852928603" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3085711044867596"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.313447751248781" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.40829413676215975">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21168947897011536">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.34880531206704046">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7224669268064621">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7386430933531749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.08750332310363196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7063295988545597"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7990315473755323"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9139613591363787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7132340166182896"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6046856370000744"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.39177719134335254"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8662998840491412"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.17539627356892873"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.02523469521598609"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5829151569250466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9090012889213162"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.16877929434215733"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8965773759540088"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.740480953426025"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.03386846964262813"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7945539347638979"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.061665272349856526"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
