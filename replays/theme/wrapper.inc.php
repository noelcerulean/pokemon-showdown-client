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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.13400352828655993" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.12421494726987614" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.009988337311409579" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7192667300765163" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.39446185451455973" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3219053217665333" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3288794023146353"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.11348141512291088" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2228550241294196">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09826078878464717">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6993675917097566">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9555772983271484">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9568049550734874"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.490921556012077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.008497660718605138"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.18984714853288187"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9867079025967715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1847005948836722"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4254291948035327"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3004410338070429"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.38590982686530095"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.13098717465481635"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5982928101057787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.03766246932665296"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.47301660925288935"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9961050225886645"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9835920919937493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.14410795278727995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7715226535985882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.16397950454165322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6385716567766979"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
