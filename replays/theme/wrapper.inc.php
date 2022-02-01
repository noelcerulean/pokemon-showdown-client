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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.10399584055808164" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2573473979072338" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6180393422419173" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8236786187819882" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.37006998916245903" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5273672395301079" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.27478344733614746"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.1565281047003726" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5033045926005151">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8904676787775319">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.863116830514923">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9521448373549628">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4264597009871236"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.1866365304823827"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9474981652529377"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4664332466783334"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.10146649001195751"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8777985042666943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.35345097035575157"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6350388640368088"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9614732334326503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6181634415646318"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7257144236149742"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.889620157092682"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.74468158410503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.31750238517030716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4917809451026831"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5084502317682802"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9636554762233775"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8702128726828591"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2584333915087995"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
