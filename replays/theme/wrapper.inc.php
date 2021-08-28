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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2318116005120716" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9147980379910552" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.27853591281470824" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.158460679432457" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9669535869410519" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.16326820422769384" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5147715050439621"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9850861235412285" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5629495307725847">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.19429080074556238">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.23763961971755876">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.310890228950482">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.28845181808845033"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8752895474090112"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8586559826903191"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3813524667099577"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.942185913801878"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.082723083786443"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9683694932485714"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.13021394779120454"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5319887839771289"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3360680339046689"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4202905547001672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8359460735522757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.535849357354125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.11890807811333937"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.10754722954483742"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6094201328123909"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.21852477662421177"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.20731241949022627"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3898330187353869"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
