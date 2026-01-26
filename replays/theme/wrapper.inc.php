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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6739625204459259" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9708883332470777" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.931243029599889" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4662677504612398" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.32554564365655825" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5311114359599145" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.23548160908275007"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2209604397338456" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6541091965844568">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5884927554367858">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.884581306787753">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.028587514311119833">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6797378413054336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.2898520097972379"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8945628410193744"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1575749550960197"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8122966301853982"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.48640472960153036"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.42121074750962695"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.1333838950159485"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6904989449352061"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1315756679091722"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.11955351379810386"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9523814679026008"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.02426218026488236"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5338293897516329"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9812316250440223"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4665191196636578"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6821594401234603"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.1852067665424031"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3225548059436312"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
