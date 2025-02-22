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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.05620521521181132" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6598958365965137" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.012582736885333734" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7070254232562148" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6432213873730646" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5613969116858124" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.47250620458295645"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.05626690068747431" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3599300583408669">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.910765973567762">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9748093246286444">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5663154722731925">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.22902087300871887"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.1883899692349451"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.002889399486027955"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6178611138224299"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.39626502798758034"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8455453082723305"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2887017675315271"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.16005238582972936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.236232920274408"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.26014630035214137"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9506015245489181"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.02799841338277531"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4914292738509214"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8641399926797415"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.28376077503130936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6639751477173392"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.26829417326428295"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8686019419845927"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.14258405493900095"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
