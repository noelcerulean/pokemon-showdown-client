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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5803158929598526" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7495997879340113" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9622056322284516" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.23697071760561683" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.18124114191723995" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.18595841402790958" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.21132519463982047"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.34691968620636504" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7090617247521616">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5653840890006396">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9238047344960476">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4656925257093798">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6614034409142728"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.27254982089584945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3453659662009043"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.926242821242379"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7630270077538546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.15117824495253296"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5926756199328826"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.19384354380221192"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9115769041152673"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5878992445111446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.1784503843870866"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.22857385952000175"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.052164686129998694"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6441792935103192"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.031168422793987238"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8117681056065831"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.18051944957607025"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2515188015630987"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9635484931025537"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
