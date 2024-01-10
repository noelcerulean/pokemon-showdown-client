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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7254208711689862" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.06509498941053016" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6725995564776679" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.17828113639353615" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.21064540202532478" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.18544509597693115" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.781862118626349"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8270361669885788" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6710270272321375">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.916793414744548">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3644417655718468">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.94306794114944">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8782647014400737"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.07391119158048509"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3159985108560672"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.04311100069012319"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.054712573964227795"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9379215189609007"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8033578636579368"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.09840275557451972"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.24604748673423904"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6297735604255157"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.41098045881231093"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9096563015219539"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5483455720989203"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3416743519639329"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3929173646061954"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7260814355716141"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2603979855182228"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7521554509953028"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7544886185830315"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
