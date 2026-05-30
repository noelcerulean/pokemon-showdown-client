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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.1470629933364911" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.23324777645590533" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.1853087178381021" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5357991000281528" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6970753763628073" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.030163793303280118" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.11514754998152821"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5985470432659901" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9682318510575008">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5421545375993402">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5980450976893243">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.13208951894796184">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3528743845458848"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6667361041371422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4079542870550128"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.42557533746439935"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7896011838429304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3173605166068003"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.11058491809446647"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.28360832013170745"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9025922658723153"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2971259223320524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9758744625478752"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.1915486477293391"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.35942954795662896"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3955336847780204"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8382933064574327"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.0746973309521004"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7017008616384621"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9347938671471727"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.11448374466804068"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
