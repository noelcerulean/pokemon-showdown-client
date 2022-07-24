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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6902354677025471" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.31152578329412606" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.11022375676204432" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.664482948334101" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7699568808160244" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3372990160012592" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.22107227698625165"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4745584836884289" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7240865196672557">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5749268918572827">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.35941701682354665">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6540104636259592">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08855032071867064"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9779289120921637"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2872025545018051"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.503010415985985"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.08048878510064172"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.21289165451884662"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.25068573756670687"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.17060212651323403"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7973209207946821"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8964018834727063"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.23537016899818686"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3443879490114605"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4834203867534739"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9563486386249271"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.14191897738551118"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.10341308032844498"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.87625609268392"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3274463014548581"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.003434741579584566"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
