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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9672760517674854" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.1216408813241483" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.24577758756561163" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.22803534365091682" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4907247392327543" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1972755739700589" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.11877957791322391"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.37165015367748455" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.18768065482406415">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4395988134894795">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.013201149128434508">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9284917853532337">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6202707812679054"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7362982998702268"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.07069649578830028"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7208824264466136"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.021920881725495445"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5950161392211135"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5081194787529875"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7181926582080689"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.29731517742701885"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.930231342973403"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.03076525305930522"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9379712463651919"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3796433912628854"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6049640234269411"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.20302757997572107"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5879265366338542"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.33964919463445087"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7031075300471863"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2187893227947204"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
