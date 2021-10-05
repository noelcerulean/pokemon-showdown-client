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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6118611279410204" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.13390100970987184" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5885518976987305" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8248206860355998" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.20139950048710276" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1924352431279306" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.932991733812855"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.03072271881497257" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0821905117770787">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.13415577288673752">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5714958483002976">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3416445140680848">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7236862762227712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6742090297284626"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4988157052596194"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.01832364108513529"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.753263084143992"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5074705209353163"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.22342913973041112"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2091980638605051"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6603877123917168"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6657967823281035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8960856078690502"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.35437000805481644"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9299806737131655"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.806013760597978"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.10121074024435606"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6895635608694843"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4865306419721913"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8291850203229905"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8755767685027347"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
