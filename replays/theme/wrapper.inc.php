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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.49904233286341326" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.927218462942397" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9795074948893101" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4045093581423178" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.25874613199548824" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6176192442300907" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.1693255861644123"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7950487727296915" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5945220556501718">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.47404803842408416">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3509406711653005">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.607602444957223">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3396930194768695"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8202749623454137"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.224750369094038"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.06080566714120095"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7404059821618365"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9846125012627693"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8597306746883098"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.022205489555843005"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.26859564961852245"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.18772023235876523"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8589357953456791"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8241306809197086"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.609461853798569"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.11107567817243069"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6930182208364062"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3974505405528246"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.20631621779418374"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6578817335043048"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3393482912288577"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
