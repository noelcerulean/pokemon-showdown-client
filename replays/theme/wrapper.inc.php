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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3128631071718553" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.37669301498927954" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9318942869608149" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.051584662772341305" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5266869540514394" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4608913651262574" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8750470965958541"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.44705282503429666" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.634833001046393">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.11575207735565396">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9234297663210553">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7468477855238367">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1371347235106366"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5045037404876094"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7954185500797677"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9860124247730861"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5654650512324875"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8274336752867353"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.12110738272921528"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3686748234091122"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8228828403112949"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.502297526399831"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3353544510446371"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7123603090040858"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.42598945579288894"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5744316914879375"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6795173082299899"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.41066006936347166"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2944222165006023"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5089847595418735"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.09565983034348813"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
