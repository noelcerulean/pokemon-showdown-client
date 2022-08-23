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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6189006096175622" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2629237184780986" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7209523197644176" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2128637794538446" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8775334871755187" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.10023985032068716" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8042005547016775"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.29438658016038377" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9259882474747114">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5498359401592883">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3839372412878266">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5841907835680045">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.09062050327825188"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.971370753870137"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.36191304924254286"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8603711688421032"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.769188554984505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.0678424881606221"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8297412404175208"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6765441186840946"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.21846727221661966"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.0347619737638214"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.014487294826254882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8478138234223658"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7034698047970551"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7582360129003725"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8862474658171748"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.15007210083771994"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6580955297443842"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.48847150203052125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9215474420314527"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
