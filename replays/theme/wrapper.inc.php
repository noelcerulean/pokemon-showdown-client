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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9899070710058202" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.26708860029625514" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.09231599354687736" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9910781003028208" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.22876248532900378" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6097108550330277" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.49987326257142506"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9573519336786855" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.26810357638282256">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.29004251769045575">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9326706976313572">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.0045826014533716375">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.07285082214000127"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9720011853479678"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.009711969671620357"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5891128091481017"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.46068559645815355"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9774021026825228"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7070285357329902"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.20114844930962716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7204906046171489"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8052001321588707"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7211221227349003"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4045846542140499"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.308072754102092"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.35391348033773307"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7644978575151693"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.13106748118636768"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2161223690058618"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.12911322332357011"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.975216977286445"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
