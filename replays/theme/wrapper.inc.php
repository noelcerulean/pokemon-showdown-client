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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8535648558331015" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.40374845513302526" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5335539827530509" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.42496174713742807" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.12998220562125207" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6839623314240946" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5348124535368814"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5856240625038924" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.06950736641237976">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6028013371128176">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9682746513182194">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.887506908974453">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.16656520891309712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.18810510341495723"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5131260873160239"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7614079050552343"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5428763382629616"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6899597610814017"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2507579896654559"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7122412057462371"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7480576382442048"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3424399339126323"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5338342639219669"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4515013306345317"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8966289901687512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.13589199857499934"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6393923037394287"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5556529831844808"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.25131409511681735"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.018350457240802864"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8838295520509294"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
