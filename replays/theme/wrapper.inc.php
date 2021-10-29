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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.1037251335727356" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8923488837329767" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5413581675007795" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9836506346295792" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6690940680263318" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.07336142769554832" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.38666580405461737"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.39957846256158613" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20167067232060054">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.22268288439205985">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8690085210080003">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4058447482892402">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.26089465401952006"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8397341909954972"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.10173768467596123"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9501695930041263"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3135856061462241"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2462129129542887"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3042800587819672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3352688733549791"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8579816536907963"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.01709694138970841"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.21331154246424422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8310007929240759"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.45363218617909284"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.48628161702419725"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.40735976401890905"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5347110763369773"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8131637799117037"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.05605344035026594"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.603729518589599"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
