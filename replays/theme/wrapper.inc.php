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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7867054078292501" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5389390607143474" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.646717535850315" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6979313636313258" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4322792857660127" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.19919144314940262" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.41866030892301875"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3912622025137098" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0381482871025689">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3083233996361141">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.14926414243439745">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.01005690279139193">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.39601972781500727"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9341062944499656"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7126133722150239"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.555902104366327"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5729813177835488"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6301235843833966"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8619269054725305"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.743004413258503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.49481119039676713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5393774856543094"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8973200400540189"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6805963225667202"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.006046091208779414"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5883232621340448"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8524794937915616"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8894586186287072"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.23257696722726862"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6830952721186181"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7493014533666569"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
