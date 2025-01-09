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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.22852691281111426" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7433704571041941" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7844729777975845" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.05025344820010713" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.24082815351877396" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7601909580994737" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4172554714242023"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8587847294176787" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5274647726030754">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9280682435700216">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5252084643110893">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.40287042258455186">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.17578682877984098"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4391007694831963"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9653418857055702"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7822131288540968"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.010642318824125363"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5413136780653582"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.37802015661024124"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2578224727598637"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8210841347314077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8051485261754019"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8684341621066876"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7984678578358069"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9937041906427793"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6988596324288803"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1510850685421472"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5234440650198298"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.17600578704704328"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8477161461730724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.787437706066425"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
