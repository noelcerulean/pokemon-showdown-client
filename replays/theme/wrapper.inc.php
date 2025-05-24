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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5468949528269935" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8568128867297724" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.20446674668094467" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.19631682210887047" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.955320113618481" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.589167274588843" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.1303521706768349"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.761731202040913" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6793330086923668">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.90236598714789">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6526410495770214">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.027523193089879605">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5802462345817303"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6944950978702398"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.523278311224046"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5022784120714356"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6006829275986085"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8200583200601932"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.038092167075319816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6213616464499234"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.28840361489981325"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.26855272915221473"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9022776985378009"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6351262334856635"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.527111620927615"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.46419719732302545"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2442716130417799"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4975638646815912"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7187947006496025"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5605889898144238"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3735251911556099"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
