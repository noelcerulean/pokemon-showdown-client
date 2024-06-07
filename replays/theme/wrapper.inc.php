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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.449706337082874" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4090726469069754" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6679846870939545" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4865874942214088" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.34032565381138213" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5613787938964014" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.26143760712317765"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.33671422089099634" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1578295513626955">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09350745829083507">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9960159964055526">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.1428651574974995">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4038499281940655"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5991322819916198"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8061721550243244"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9328566462762429"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.20863843978390628"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23098133528969278"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.11982918572520074"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.26554028990875556"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.06409195682346636"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.21415119117696202"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6259796055872473"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6015272212377221"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8922796090226961"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7921083827213538"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.36674445275471124"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9457027191468992"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.009832105365437993"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3040518450068719"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7398458655018378"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
