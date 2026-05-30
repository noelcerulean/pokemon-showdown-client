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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.01889166117043728" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4186257744060544" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.46283353562728013" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8963832818810464" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6617633376372825" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.34735787892050163" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.37739820084325726"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.39110950959461066" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6311659389593738">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3552329090803008">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.964542633636752">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.32006549739769885">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.36499500016287456"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6169640503046412"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.43609198142586014"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.290900196958235"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4960978454246314"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.15305829902153256"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.24759869617284558"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5572875248728757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.19055706309293985"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.10435040520103445"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7112713588487074"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.11736603950101743"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5208747597753958"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3470443205516687"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.07212672381389895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9781360257297405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1304859861084633"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7976403344416476"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3428345595345399"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
