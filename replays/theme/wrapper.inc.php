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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.25801051633008476" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6131321447403835" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.04459760597103957" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.97265522898511" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.28015931890273227" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9075189042270939" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7010867728705974"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6800025651424217" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4101654833327588">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7848011329713709">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6612138788570983">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.050373724328097724">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.10492464876028418"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.32432535535174756"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.05770340893498016"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.33149683900329974"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.20139556079784393"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.06686371113684353"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.06553854901790901"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.45785325250294684"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.35726216366906316"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.45049051804216655"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3209001393993718"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8948973139671879"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.03642067238247382"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6672739119223958"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3701961027797003"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.32280595912799104"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.24248614276773806"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3157573027523668"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7911116649640215"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
