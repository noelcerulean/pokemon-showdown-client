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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.99624491650535" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8322375137896505" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6147737164969196" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7732288304800712" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7850105242792094" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8803285268824319" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9429760988818119"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2775489497993169" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3525003103254525">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21545471721040355">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.0793946354069559">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.05556776246998574">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3366314527956078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.0010272675857863067"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6300989348095167"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5498397563631532"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9679167094965413"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.13261203233888974"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5374081580234862"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7582954664225865"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4997099881891951"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6343019155658167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7093717344476886"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3810865238594361"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8541872569984306"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.42193744664596244"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3310313085498764"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9838319734664482"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2251871334293929"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2747541089476937"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5122581705526428"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
