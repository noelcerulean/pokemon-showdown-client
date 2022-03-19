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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5886059766511451" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.41254778711785445" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.47653168757072883" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8394565314662825" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.0009674649415130077" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.25925941231117067" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.25051200494655257"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2683710189533779" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7959595692054455">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4688115080129438">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8558455001783567">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.016026097827646746">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9419608331059965"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.29217800495512436"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9137623692012964"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7115023234021887"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.27045239273344235"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.00846516396977659"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2079611356207971"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.09438695723577584"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.19142497893405186"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.33654755310165285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.46532941620017265"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.03942288979237696"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.2767560760567598"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.00941602078059689"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.09599856852415223"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8735121215654176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.28216952792901107"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3545543911866871"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6966290030070372"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
