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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5506012210069606" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.16286537816466273" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.11513527866267648" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.37345795860688025" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.990763991725357" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.20820076365761242" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.760459785471612"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.893513330893106" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08026781054702337">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.14699778965037025">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7257768553123487">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3842312089137845">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9468120531861459"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6558740399080696"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3463604511601146"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.43992871782959386"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4165681910528569"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.14884474693395244"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8509236077816347"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.29871627115839683"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.42787479989047106"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.979225499262709"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.06568771971630039"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.396842785138493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6124360456873708"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.07065259445849081"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.09893615150477508"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9987584300889458"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7136077062819846"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.017122066293093985"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.36574207964803307"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
