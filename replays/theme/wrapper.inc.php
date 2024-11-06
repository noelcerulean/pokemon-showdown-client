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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.33663801156100104" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3800443996761267" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2212461306570781" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3192164936644988" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7613085117165195" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9000701258037664" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6757018009470444"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9418956915324366" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4694996056711529">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5681827181926706">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3629498135696818">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.054088682064588056">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5209518468176941"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6390890083835792"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.36748736763179757"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.057450765390239855"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5006414430910189"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1345078558374726"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9269642005834078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7079481455128629"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.085350549620137"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.016397552956613826"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5031532725070491"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9690430746112553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9931352766647201"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.23939302349383706"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5815856864581717"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.17726212963186416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9775048809794946"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3253029007967787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3078540450462619"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
