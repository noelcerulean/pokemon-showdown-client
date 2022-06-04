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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.34748925576822187" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5687028058339683" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6271732346750116" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.04543986670802136" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.39828071689853073" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.33046391364260796" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.48443344861014603"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.12693524774724563" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3080860463152575">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5621087408035428">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.78825819909215">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5740155972882615">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6658866337061502"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6763591271026643"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.32307974523983685"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5195224859918899"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.19078432331548756"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.613190789157851"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.05872972456120995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.0750253800187004"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7637373058686583"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9192140381226226"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5736126574002391"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6645194085214587"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.34059732405290966"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.25809678400091585"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9252787800448403"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4803451095831581"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.11121064904900102"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8436678282251264"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9247313920523637"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
