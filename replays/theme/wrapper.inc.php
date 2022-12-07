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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.53020004366119" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3126523753989945" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4191025183407253" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8784042427372831" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7010785606343239" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4118942296321697" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9496090603388245"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.12522217370622246" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3346866996607052">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.20026162587767393">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4595226139229769">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.0182478736621281">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.0314272013547936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5613915338601965"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9691781399897859"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.128891270295602"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6865451890663135"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.0296725671045186"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9002682334655481"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.36294695596190407"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8744775528329174"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.0670716250825707"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.684388444646475"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3349232578809098"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6762191465047416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8650753674244049"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.48612332907858735"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7265266296362183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.76941156455627"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.737996787722146"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.40194882403615106"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
