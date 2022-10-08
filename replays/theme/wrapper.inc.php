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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.09291933958864851" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6467112340504353" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6046327541375731" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.014964489534134762" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9754379245778209" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.918920644262283" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6294732930492655"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.34403944855437096" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.06404267685630383">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.20458930551867516">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.07784714914890367">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3283310475520669">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.24841087705808884"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6182135296281943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5899126784937871"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.05011439583166344"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4828938098187925"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.19675460694288183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.16054169873138857"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.31187895897984164"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7314164479906156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.056020495828240646"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.29400443945409194"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.10652224641248265"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.39908054013512495"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3509787492051699"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8804201924080135"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.015782086499931625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.11518430341261521"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.39680558298275614"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.16695753593420015"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
