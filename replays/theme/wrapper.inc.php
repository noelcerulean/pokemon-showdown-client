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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8858828119816746" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.20004307911964214" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9895971029352926" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5323831169700679" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.35706188457729215" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.07486221195796938" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.33485175575105863"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7517226370440959" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3854576309189357">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6857981743770944">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.05976316446666452">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7255412458354851">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4402664630991311"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.10603556883346599"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9506717439788077"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6224871236503906"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5533308841464206"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.49288182557539995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8338723364036478"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7993947751535853"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2647006931345779"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.22974630711302302"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5468894192363698"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.017014109782427456"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.24348780049794372"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.30342548696246685"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.475693945888114"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8562190455185077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.006635026665632537"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.21404909169444863"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.10170843333018409"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
