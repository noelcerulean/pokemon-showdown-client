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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9999366384629349" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7086260920953411" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8234170192591652" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2118635557698343" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7892211894465058" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.46182555428205596" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6089947409184262"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.48612327207185535" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4472172958360372">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.13420846142478582">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.28465129107901066">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.29527129282956444">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.19560696992860205"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.48913955909272655"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.24213879687867035"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1266539546937384"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.09062183398483326"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8859454195841239"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.40103025144752524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9200784489198275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3374209232912966"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3991821836023506"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5933576411183272"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.08222519087264835"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7410500344700035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6381040866897352"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7802917776544014"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.16055718693233167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5634970062425615"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6637384969245146"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.1627847030900682"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
