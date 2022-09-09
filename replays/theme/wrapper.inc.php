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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3495566577478646" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.32186447943256247" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8346596801229273" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5187941803706446" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.447320477979271" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.836608544180615" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7956580440951393"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2494840781545955" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6296872298068623">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6264453226247737">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.37783245827488465">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6808037081179779">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8993796300153398"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5088678347848734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.20742396329496748"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7185258868514564"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8047141194857899"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.180835526312755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8775433306225018"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6388117584372084"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.28609621993791334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4599947479854529"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.01225915544791567"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.17001227913086248"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9078957740226279"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.03060648042359637"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9136045008772544"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7419896515917799"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8163155936214359"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.055571959908376156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4562123613609683"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
