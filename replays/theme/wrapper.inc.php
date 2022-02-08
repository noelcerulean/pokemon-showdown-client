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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8730599089162441" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.546497500473129" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.04766015351338071" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.26585683406168137" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6253135093300763" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.46116895325556095" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.791902436237861"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.0548517344280417" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.42003413253385946">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.38963246634261073">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.48798149304265137">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7760363640135273">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.19343656849259605"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7129193850246887"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6520730414975764"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.39752941842712763"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.13589678792140258"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5106349912066943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8639981138338915"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.766596151358568"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9429322371530775"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.35750537313065434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4421394894909685"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7510651251953815"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.09922929484048182"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8644782325368687"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9295366005373691"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9646171062655902"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.11729049915803391"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.640236889508752"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5584979295266956"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
