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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.1555560121341466" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9716021112064643" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.570185936346588" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2919107843040374" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8722805995507441" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5033193925312578" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9572825033757979"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.09338145059541159" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0576035884601338">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21619572397382503">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.11033632133442373">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9933862486668661">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.15002128672169168"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.13535952314808086"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2581947179718227"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.38546884156267813"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6548016700364752"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.71330576556708"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5262767781973312"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2795055469843182"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3129893024885064"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2889391623218436"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.560699532910734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.29411703963485225"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5465987097355114"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3784491570055386"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.42516345150961343"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.24656643866083638"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3389893793525014"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.0009354846179281395"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3895067224581352"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
