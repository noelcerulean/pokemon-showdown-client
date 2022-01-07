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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.29886078026798235" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.03433650310587977" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9746693064438035" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1960342840295548" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.02321348263209244" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.30359810330012493" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4097882661409151"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.05378379328553473" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7053537153135006">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7753255959490384">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9082724575073453">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.43507352546994604">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3282910380200119"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.022963672197796603"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7063985938379096"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5417702475230572"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3870088297205716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.953290237886607"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3389700361860881"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.1926066370262156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3244109398305923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.828725899754112"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4099370165970091"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7159406000600712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9846148657262892"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.0672046367475152"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1919206213681961"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9043202137480684"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.43946691142763017"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9854954980697068"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4075571171058956"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
