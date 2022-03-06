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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9907605380763354" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5820116250316303" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8271073973186758" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2509093319390723" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.03066177124842895" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1773565311558798" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.29135219760124476"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6823711140875617" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1214911915079182">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.07182820320095096">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8160554010252787">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5470384724913164">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2640538362221696"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5137284156233894"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.950152659395662"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2509801615933964"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5319376268021319"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.13064860232299091"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7348103622278128"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7927077224013444"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.417554272379689"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5607770902669587"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2947669840039826"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8032122894182938"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8302147772087427"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6291993521238017"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.49517357877682233"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7118976609454268"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.20117664127148327"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7748091537051027"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9149125963129419"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
