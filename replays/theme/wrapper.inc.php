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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3361549330085476" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9822443023579215" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.249533006272604" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7699571855167853" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7278397384384825" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.015192209124080147" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3130237951738297"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5720481582400747" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12561915930404122">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7237247280417267">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8327697871113728">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.040038514084928645">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7468744964514049"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.28808593596381615"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7418388479373517"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5461032984818499"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7735165283693044"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7216265152472099"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7226719594192939"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9807732080488973"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6261001687285879"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.41677203118585604"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.017127371676191272"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9824364880681011"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3781166817911856"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9613991292766957"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.32490024249798366"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4374849548580093"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.010659485315273276"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.769885618389879"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.28307551883777515"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
