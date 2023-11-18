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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6859517635328705" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.1922841729320428" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8776733270142099" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.35599929592733304" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9595312244173089" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4388032997161224" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8464880423954175"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.36665081476279693" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6520550416370674">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7345154617079186">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5261357558574151">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3865758591843933">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.048379648543448006"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9456839098354028"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8199618084249187"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2356666473895399"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.46083826956722973"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3539264291595279"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7038125522932113"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8519090659122102"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3962199740729089"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9680389504231022"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.14067217276275223"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8060461420301559"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.14017281388843972"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8340083622510053"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.24309119970812842"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.07099604307965812"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3860243925693889"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.684071525876353"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.026571129914447544"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
