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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.07649001330422478" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5809594121340129" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.377430785305638" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.810069707815815" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8343000982041566" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.03463734042084288" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4546382022855022"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7205344162832341" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6529434226412161">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.04547155879792042">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3843950996609573">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.947669936042036">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6011755508864451"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6445472009907371"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.031412387698009914"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2811318537928331"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.38248362303545513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.061561603944261245"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5257112871582221"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.13570042509403168"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8373164471455288"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3219962895550361"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2881444459627589"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7529727050265409"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.14274581407469888"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9688928258856533"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5014551118303219"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.11824254974470882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4921879619836369"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.856082407490506"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.15079814367862143"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
