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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3938282309269092" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.18456766757122312" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.754511420981899" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.03755472950639849" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9009126639445302" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.48184699769851913" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2551449372713688"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.20845199345512522" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.17531554071582245">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5122121100362114">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3948696604190176">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9840667386848139">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7866973092774305"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.923116430113512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.13108539801652141"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9859383337781735"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6300174578211137"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.43954624871652803"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.40616985699329566"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.11846256683792333"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8147646976821716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7157565923340519"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.10084634949199245"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7263715374754818"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.35597014194882415"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.782328267853678"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5927656911540435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6259317396997266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.05894079458963408"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3622412623666518"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.24293964244869337"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
