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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.15282581516170546" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7909710219858297" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6108856727404548" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6676077828568594" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.12116660622912523" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7904987929849456" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.468695001048967"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8775220350495643" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.059298467108031216">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8958566239412871">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.696785967840857">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9592845005205128">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7286832320858407"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.01682285002601369"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.48252699024083867"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9367185309612704"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.953350469594898"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.12805023557646877"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5128022840040702"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2265352730146477"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7035192319321966"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.586862338639973"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3724791395935787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4420525693793216"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.48660842463658605"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.16622139849186612"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.11519972020087343"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9323835192489196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6605457490457687"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.006704124677230805"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6106225498939182"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
