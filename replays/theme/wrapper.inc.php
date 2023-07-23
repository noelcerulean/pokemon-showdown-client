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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.0766614541547821" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7173944497914386" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.79513507315021" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.26782241125133877" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8630263004214922" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7732925850605481" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5888145638842539"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8821594354796449" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11630265912304427">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9133558374651298">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.13676391126726184">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.029514646793170618">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.18517578203145302"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9558276964105537"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.18549811312199127"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6672206451244687"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5465622015071281"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5220067075121264"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8845107462965951"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8322008488582793"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9749570856556931"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6651555927717361"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.08995476590284457"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3545417671621529"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7033017844947427"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8829228937681919"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9493901305972485"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.011307368013190322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9942923855992056"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9979444756569094"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9837504598102182"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
