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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8851975670654602" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.01743631477979335" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9404031142272178" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.03455924804498056" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2595231207505617" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8904338671629304" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6304173473622174"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6007175274877419" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08061005735606552">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.22747525168566218">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.25800316621715536">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6148912782629199">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.052829244588147084"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.19143731981959422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7849061435185494"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5189672099493703"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5283167115621177"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5406845256484847"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9761726803626223"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.658107144739366"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5743941974734612"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2351026569329493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.19498999361216218"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7833121741465328"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.47391361009774746"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5348036555769655"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.27994688882679153"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6869277211815501"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.28775341895134665"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6916860748941502"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5235401982184085"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
