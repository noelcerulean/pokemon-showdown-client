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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9124214452507917" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4356223884761534" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.48533582416386634" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5512901091048399" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7910425940609831" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7075679239416479" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6016031380867846"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.040775912497109434" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5914179119672673">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.13673683911839563">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7938371297763616">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.19383166434863663">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2827841875895092"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.34820498565695224"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.010249147120288793"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4396937094637672"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.07684747955508175"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6820049051683312"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9044285242915133"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.40010275666004524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9597735946708419"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6938666265922189"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.17868750247875442"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4242489265827021"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.2668513085038433"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5202443217374562"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7991766994389153"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.45356038103056884"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.18809515641815122"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9374556149245745"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8865555809738332"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
