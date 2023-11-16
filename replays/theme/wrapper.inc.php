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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4653243729922085" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8711967130883729" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8873026721408923" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9475514659177284" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8882802663477067" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4905089644691456" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.33501002714333894"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.41134908847187956" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.37221054908188145">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5674544159623316">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1979347451820055">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6383986475432357">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8020987941778339"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6415506349965057"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7692329499527013"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6389757111956205"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9391777026800865"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10514155453118668"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5930977451249078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.25535020808667697"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5567504577570084"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.506873763216493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8162134735431583"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5161683359521314"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.362210158449914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8978318261260341"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7408099196698352"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.0026535209330860177"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3315150634556112"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.03684465452762664"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5699378011483003"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
