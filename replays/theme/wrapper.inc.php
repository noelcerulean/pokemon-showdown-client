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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6820375938869141" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.48502554376333307" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.003643729895008496" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8602940593708355" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.38545033265519457" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7840437247208278" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.35298120243423114"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6744257501787563" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7789548866316995">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5643460730615446">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6305329755339089">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.46951166220891705">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8085076918964793"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.05182739885528487"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.26343351640175783"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9200007494980738"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.571384934103367"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.25096299964254976"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2273636946006048"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5543197355805578"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4764904743796621"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3449452725809381"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8340911810300744"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.08041925419586926"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9527101753994045"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3858903077112774"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8258587430579452"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7479891846281777"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.06254035052154627"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.03390832609326866"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7908257035870907"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
