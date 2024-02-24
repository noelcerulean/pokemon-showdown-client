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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5873333635521594" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.10869946911834671" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9238907550691009" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.22163531925398194" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8616336624497858" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.020502433687897836" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.39496406759930713"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6044042085303776" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3745938093697434">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8218286145645672">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6474672743462533">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.14384965013659556">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3456383763855211"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.44336510317369915"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9356631964841053"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.15421732957015766"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.746312793321354"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.22546620750831026"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.972764313077576"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6448300358256849"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4614365297386076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8236849317005202"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9751826959408207"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.16455471578366043"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5562532385286387"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4965184756390004"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6019914650263265"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3291357389053262"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4950643409443949"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8713589859830828"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.34850704325522197"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
