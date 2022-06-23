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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6793347143335848" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6468858861899804" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7653603309810428" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.12638679434557898" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8403805739200907" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4280083900817029" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2548928241924522"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.556093053218049" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.49733170136093796">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9051004754036183">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.07269293557651269">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.34753914820705445">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.816118431527374"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7783404958107012"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8552313807232097"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.22820212312644816"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5754535737425601"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.15586215949833382"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.09071512686063632"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.47444680783302307"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.19874684357891903"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4887217537192434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.40045036817538016"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.012692343736431466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.16001073144866584"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7207549304199032"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.14823469032113756"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.37869751337677116"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.711791032559929"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7069756250012884"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9721567603209536"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
