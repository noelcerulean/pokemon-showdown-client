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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5939003062140753" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6178882595162323" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4424510558024981" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5325192693759195" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5096845009493653" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.38692634233325296" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.1299141348377546"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.48899450869254224" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1546553950681977">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3069094513347461">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1681731054772">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6023672817545216">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.005464755172643443"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.46392523384041984"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6824654159497126"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1450227486595388"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9221549516153491"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10113690087395488"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.28037508679074774"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8916623268185524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6406965290692872"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.48600318849980106"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.15655552618123436"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.23099153459197508"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.47350077796925283"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.04454568468352371"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.18959406150865665"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7424394516255779"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9115436560297505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.708479032889312"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5695919756924803"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
